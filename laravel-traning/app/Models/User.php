<?php

namespace App\Models;
use Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable {

	use HasFactory;
	protected $fillable = [
		'name',
		'phone_no',
		'email',
		'password',
	];

	protected function name(): attribute {
		return Attribute::make(
			set: fn($value) => strtoupper($value),
			get: fn($value) => ucfirst(strtolower($value))
		);
	}

	protected function password(): Attribute {
		return Attribute::make(
			set: fn($value) => bcrypt($value),

		);
	}

	protected $casts  = [
		'phone_no' => 'string',
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
