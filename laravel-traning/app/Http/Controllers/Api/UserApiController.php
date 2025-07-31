<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class UserApiController extends Controller {

	//get all users
	public function index() {
		$users = User::all();
		return response()->json([
			'status' => 'success',
			'users'  => $users,
		]);
	}

	//register user
	public function register(Request $request) {
		// Validate the request data
		$validator = validator::make($request->all(), [
			'name'          => 'required|string|max:255',
			'phone_no'      => 'nullable|string|max:20',
			'email'         => 'required|email|unique:users,email',
			'address'       => 'nullable|string|max:255',
			'password'      => 'required|min:6',
			'profile_photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:3000',

		]);

		if($validator->failed()) {
			return response()->json([
				'status' => 'error',
				'errors' => $validator->errors()
			], 422);
		}

		// Create user
		$user = User::Create([
			'name'          => $request->name,
			'phone_no'      => $request->phone_no,
			'email'         => $request->email,
			'address'       => $request->address,
			'password'      => Hash::make($request->password),
			'profile_photo' => $request->hasFile('profile_photo') ? $request->file('profile_photo')->store('uploads', 'public') : NULL,
		]);
		// Return response
		return response()->json([
			'status'  => 'success',
			'message' => 'User registered successfully!',
			'user'    => $user,
		], 201);

	}

	//update user
	public function update(Request $request, $id) {
		$user = User::findOrFail($id);
		// Validate the request data
		$validator = Validator::make($request->all(), [
			'name'          => 'sometimes|string|max:255',
			'phone_no'      => 'nullable|string|max:20',
			'email'         => 'sometimes|email|unique:users,email,' . $id,
			'address'       => 'nullable|string|max:255',
			'password'      => 'nullable|min:6',
			'profile_photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:3000',
		]);

		if($validator->fails()) {
			return response()->json([
				'status' => 'error',
				'errors' => $validator->errors()
			], 422);
		}

		// Handle profile photo
		if($request->hasFile('profile_photo')) {
			if($user->profile_photo && Storage::disk('public')->exists($user->profile_photo)) {
				Storage::disk('public')->delete($user->profile_photo);
			}
			$user->profile_photo = $request->file('profile_photo')->store('uploads', 'public');
		}

		$user->update([
			'name'          => $request->input('name'),
			'phone_no'      => $request->input('phone_no'),
			'email'         => $request->input('email'),
			'address'       => $request->input('address'),
			'password'      => $request->filled('password') ? bcrypt($request->input('password')) : $user->password,
			'profile_photo' => $user->profile_photo,
		]);

		return response()->json([
			'status'  => 'success',
			'message' => 'User updated successfully!',
			'user'    => $user,
		]);
	}

	//delete user
	public function destroy($id) {
		$user = User::findOrFail($id);

		// Delete profile photo
		if($user->profile_photo && Storage::disk('public')->exists($user->profile_photo)) {
			Storage::disk('public')->delete($user->profile_photo);
		}

		$user->delete();

		return response()->json([
			'status'  => 'success',
			'message' => 'User deleted successfully!',
		]);
	}

}
