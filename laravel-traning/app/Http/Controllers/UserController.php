<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller {


	public function single(user $user) {
		return view('user.single', compact('user'));
	}

	public function index() {
		return view('user.index');
	}

	public function store(Request $request) {
		 dd($request->all());
		$request->validate([
			'username'  => 'required',
			'email'     => 'required|email',
			'phone_no'  => 'required|numeric',
			'password'  => 'required',
		]);

	}
}
