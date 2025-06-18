<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
	public function getvalidate() {
		return view('users.list');
	}

	public function store(Request $request){
		// dd($request->all());
		$request->validate([
			'username'  => 'required',
			'email'     => 'required|email',
			'phone_no'  => 'required|numeric|digits:10',
			'password'  => 'required|min:8',
		]);
		return view('users.list');
	}
}
