<?php

namespace App\Http\Controllers;

use App\Models\profile;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller {

	public function single($id) {
		return view('user.single', ['id' => $id]);
	}

	public function index() {
		$users = User::with('profile')->get();
		return view('user.index', compact('users'));

	}
	public function create() {
		return view('user.create');
	}

	public function store(Request $request) {

		$validated = $request->validate([
			'username'     => 'required|string|max:255',
			'phone_no'     => 'nullable|string|max:20',
			'email'        => 'required|email|unique:users,email',
			'address'      => 'nullable|string|max:255',
			'company_name' => 'nullable|string|max:255',
			'contact_name' => 'nullable|string|max:255',
			'password'     => 'required|min:6',
		]);

		User::create([
			'name'         => $validated['username'],
			'phone_no'     => $validated['phone_no'],
			'email'        => $validated['email'],
			'address'      => $validated['address'],
			'company_name' => $validated['company_name'],
			'contact_name' => $validated['contact_name'],
			'password'     => bcrypt($validated['password']),
		]);

		profile::create([
			'user_id'      => User::where('email', $validated['email'])->first()->id,
			'company_name' => $validated['company_name'],
			'contact_name' => $validated['contact_name'],
		]);

		return redirect()->route('user.index')->with('success', 'User created successfully!');
	}
}
