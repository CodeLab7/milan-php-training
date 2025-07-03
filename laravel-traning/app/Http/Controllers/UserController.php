<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller {


	public function single($id) {
		return view('user.single', ['id' => $id]);
	}
	public function index()
	{
		$users = User::all();
		return view('user.index', compact('users'));

	}
	public function create() {
		return view('user.create');
	}

	public function store(Request $request)
	{

		$validated = $request->validate([
			'username' => 'required|string|max:255',
			'phone_no' => 'nullable|string|max:20',
			'email' => 'required|email|unique:users,email',
			'password' => 'required|min:6',
		]);

		User::create([
			'name' => $validated['username'],
			'phone_no' => $validated['phone_no'],
			'email' => $validated['email'],
			'password' => bcrypt($validated['password']),
		]);

		return redirect()->route('user.index')->with('success', 'User created successfully!');
	}
}
