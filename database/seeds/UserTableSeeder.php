<?php

namespace database\seeds;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('users')->delete();

		$user1 = array(
			array(
				'name' => 'cornelius',
				'slug' => 'cornelius',
				'email' => 'corneliusve@hotmail.com',
				'password' => bcrypt('secret')
			)
		);

		$user2 = array(
			array(
				'name' => 'nees',
				'slug' => 'nees',
				'email' => 'nees@hotmail.com',
				'password' => bcrypt('secret')
			)
		);


		DB::table('users')->insert($user1);
		DB::table('users')->insert($user2);
    }
}
