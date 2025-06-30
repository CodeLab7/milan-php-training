<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller {


	public function single($id) {
		return view('user.single', ['$user' => $id]);
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
