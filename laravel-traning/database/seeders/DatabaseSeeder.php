<?php

namespace Database\Seeders;

use App\Models\User;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {

	/**
	 * Seed the application's database.
	 */
	public function run(): void {

		User::factory()->create([
			'name'     => 'Test User',
			'phone_no' => fake()->phoneNumber(),
			'email'    => 'test@email.com',
		]);
		User::create([
			'name'     => 'rohan ',
			'phone_no' => '6353479965',
			'email'    => 'rohan@email.com',
			'password' => bcrypt('password124'),
		]);
	}

}
