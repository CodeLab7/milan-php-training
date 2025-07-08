<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
	//seeding
    public function run(): void
    {

	    User::create([
		    'name' => 'aman',
		    'phone_no' => '6353479965',
		    'email' => 'aman@gmail.com',
		    'password' => bcrypt('password124'),
	    ]);
    }
}
