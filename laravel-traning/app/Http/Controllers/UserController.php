<?php

namespace App\Http\Controllers;

use App\Models\profile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller {

	public function index() {
		/*$user = user::first();
		dd($user);
		return $user->toarray();*/
		$users = User::all();
		return view('user.index', compact('users'));
	}

	public function create() {
		return view('user.create');
	}

	public function single(User $user) {
		return view('user.single', compact('user'));
	}

	public function store(Request $request) {
		$request->validate([
			'name'          => 'required|string|max:255',
			'phone_no'      => 'nullable|string|max:20',
			'email'         => 'required|email|unique:users,email',
			'address'       => 'nullable|string|max:255',
			'password'      => 'required|min:6',
			'profile_photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:3000',
		]);

		$storable = $request->only([
			'name',
			'phone_no',
			'email',
			'address',
			'password',
		]);
		//profile photo create
		if($request->hasFile('profile_photo')) {
			$fileName = time() . '.' . $request->file('profile_photo')->getClientOriginalExtension();
			Storage::disk('public')->put('/uploads/' . $fileName, file_get_contents($request->file('profile_photo')));
			$storable['profile_photo'] = $fileName;
		}

		$user = User::create($storable);

		$profile_data            = $request->only([
			'phone_no',
			'address',
		]);
		$profile_data['user_id'] = $user->id;

		profile::create($profile_data);

		return redirect()->route('user.index')
		                 ->with('success', 'User created successfully!');
	}

	public function update(Request $request, User $user) {

		$validated = $request->validate([
			'name'          => 'required|string|max:255',
			'phone_no'      => 'nullable|string|max:20',
			'email'         => 'required|email|unique:users,email,' . $user->id,
			'address'       => 'nullable|string|max:255',
			'profile_photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:3000',
		]);
		//profile photo
		if($request->hasFile('profile_photo')) {
			if($user->profile_photo && Storage::disk('public')->exists('/uploads/' . $user->profile_photo)) {
				Storage::disk('public')->delete('/uploads/' . $user->profile_photo);
			}
			$fileName = time() . '.' . $request->file('profile_photo')->getClientOriginalExtension();
			/*$request->file('profile_photo')->move(public_path('uploads'), $fileName);*/
			$request->file('profile_photo')->storeAs('/uploads/', $fileName, 'public');
			$validated['profile_photo'] = $fileName;
		}
		else {
			$validated['profile_photo'] = $user->profile_photo;
		}
		$user->update([
			'name'          => $validated['name'],
			'phone_no'      => $validated['phone_no'],
			'email'         => $validated['email'],
			'address'       => $validated['address'],
			'password'      => bcrypt($request->input('password')),
			'profile_photo' => $validated['profile_photo'] ?? $user->profile_photo,
		]);

		$profile_data            = $request->only([
			'phone_no',
			'address'
		]);
		$profile_data['user_id'] = $user->id;

		profile::updateOrCreate($profile_data);

		return redirect()->route('user.index')
		                 ->with('success', 'User updated successfully!');
	}

	public function destroy(User $user) {
		//user delete to delete profile photo
		if($user->profile_photo && Storage::disk('public')->exists('/uploads/' . $user->profile_photo)) {
			Storage::disk('public')->delete('/uploads/' . $user->profile_photo);
		}
		//profile delete but photo not delete
		/*if($user->profile_photo) {
			storage::delete('/uploads/' . $user->profile_photo);
		}*/
		$user->delete();
		Profile::where('user_id', $user->id)->delete();

		return redirect()->route('user.index')
		                 ->with('success', 'User deleted successfully!');
	}

	//download file
	public function download($filename) {
		$path = '/uploads/' . $filename;

		if(Storage::disk('public')->exists($path)) {
			return Storage::disk('public')->download($path, $filename);
		}

		return back()->with('error', 'File not found.');
	}

}