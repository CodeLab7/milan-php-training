<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable {

	use HasFactory;
	//model
	protected $fillable = [
		'name',
		'phone_no',
		'email',
		'email_verified_at',
		'password',
	];

	// name mutator and accessor
	protected function name(): attribute {
		return Attribute::make(
			set: fn($value) => strtoupper($value),
			get: fn($value) => ucfirst(strtolower($value))
		);
	}

	//casts phone_no to string
	protected $casts  = [
		'phone_no' => 'string',
		'email_verified_at' => 'datetime',
		'password' => 'hashed',
	];
	protected $hidden = [
		'password',
		'remember_token',
	];

	/**
	 * Get the attributes that should be cast.
	 *
	 * @return array<string, string>
	 */
	protected function casts(): array {
		return [
			'email_verified_at' => 'datetime',
			'password'          => 'hashed',
		];
	}

}
