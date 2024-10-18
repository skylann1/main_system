<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    	$roles = [
    		[
    			"id" => 99,
    			"roleName" => "admin"
    		],
    		[
    			"id" => 1,
    			"roleName" => "member"
    		],
    		[
    			"id" => 2,
    			"roleName" => "guest"
    		]
    	];

    	foreach ($roles as $role) {
    		Role::query()->create($role);
    	}
        // User::factory()->create();
    	$pw = '12345678';
    	$users = [
    		[
    			'email' => 'admin@gmail.com',
    			'password' => bcrypt($pw),
    			'gender' => "laki-laki",
    			'university' => 'UBSI KLA',
    			'role_id' => 99
    		],
    		[
    			'email' => 'ketua@gmail.com',
    			'password' => bcrypt($pw),
    			'gender' => "laki-laki",
    			'university' => 'UBSI KLA',
    			'role_id' => 1
    		],
    	];

    	foreach ($users as $user) {
    		User::query()->create($user);
    	}

        // \App\Models\User::factory(1)->create();
    }
  }
