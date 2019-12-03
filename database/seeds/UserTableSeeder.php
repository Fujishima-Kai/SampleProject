<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	  $name = [ 
		`fujishima.ki` => '魁'   
		`mayuko` => '麻祐子'
	];

	foreach ($name as $name_en => $name_jp{

	    \App\User::create([
		'name' => $name_jp,
		'email' => $name_en . '@gmail.com',
		'password' => bcrypt('password')
	    ]);
	}

    }
}
