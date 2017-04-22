<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$users = 	[
						[ 
		            		'name' 		=> 'Qudrat Nurfajar Yasin Sutisna',
				            'username' 	=> "testLogin",
				            'email' 	=> 'testLogin@gmail.com',
				            'password' 	=> bcrypt('testLogin'),
				        ],
				        [
				            'name' 		=> 'Qudrat Nurfajar Yasin Sutisna',
				            'username' 	=> "Qudrat99",
				            'email' 	=> 'fajarpunya99@gmail.com',
				            'password' 	=> bcrypt('123456'),
				        ]
				    ];

        DB::table('users')->insert($users);

    }
}