<?php

namespace App\Http\Controllers;

use App\Models\profile;
use App\Models\User;
use Illuminate\Http\Request;

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
			'name'     => 'required|string|max:255',
			'phone_no' => 'nullable|string|max:15',
			'email'    => 'required|email|unique:users,email',
			'address'  => 'nullable|string|max:255',
			'password' => 'required|min:6',
		]);

		$storable = $request->only([
			'name',
			'phone_no',
			'email',
			'address',
			'password',
		]);
		$user     = User::create($storable);

		$profile_data            = $request->only([
			'phone',
			'address',
		]);
		$profile_data['user_id'] = $user->id;

		profile::create($profile_data);

		return redirect()->route('user.index')
		                 ->with('success', 'User created successfully!');
	}

	public function update(Request $request, User $user) {

		$validated = $request->validate([
			'name'     => 'required|string|max:255',
			'phone_no' => 'nullable|string|max:15',
			'email'    => 'required|email|unique:users,email,' . $user->id,
			'address'  => 'nullable|string|max:255',
		]);

		$user->update([
			'name'     => $validated['name'],
			'phone_no' => $validated['phone_no'],
			'email'    => $validated['email'],
			'address'  => $validated['address'],
		]);

		$profile_data            = $request->only([
			'phone',
			'address',
		]);
		$profile_data['user_id'] = $user->id;

		profile::UpdateOrCreate($profile_data);

		return redirect()->route('user.index')
		                 ->with('success', 'User updated successfully!');
	}

	public function destroy(User $user) {
		$user->delete();
		Profile::where('user_id', $user->id)->delete();

		return redirect()->route('user.index')
		                 ->with('success', 'User deleted successfully!');
	}

}