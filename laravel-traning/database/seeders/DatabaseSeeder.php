<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
	//seeding
    public function run(): void
    {
         User::factory()->count(10)->create();

	    User::factory()->create([
		    'name' => 'Test User',
		    'phone_no' => fake()->numerify('##########'),
		    'email' => 'test@email.com',
		    'email_verified_at' => now(),
	    ]);
    }
}
