<?php
/**
 * Users Table Seeder
 *
 * @package   isabry/gatekeeper
 * @author    Isamil SABRY <ismail@sabry.fr>
 * @copyright Copyright (c) Isamil SABRY
 * @link      https://github.com/isabry/gatekeeper
 */

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
	public function run()
	{
		DB::table('users')->delete();

		$datetime = Carbon::now();

		$users = [
			[
				'name' => 'admin',
				'email' => 'admin@sabry.fr',
				'password' => Hash::make('admin'),
				'gender' => 'male',
				'created_at' => $datetime,
				'updated_at' => $datetime,
			],
			[
				'name' => 'manager',
				'email' => 'manager@sabry.fr',
				'password' => Hash::make('manager'),
				'gender' => 'female',
				'created_at' => $datetime,
				'updated_at' => $datetime,
			],
			[
				'name' => 'user',
				'email' => 'user@sabry.fr',
				'password' => Hash::make('user'),
				'gender' => 'male',
				'created_at' => $datetime,
				'updated_at' => $datetime,
			],
		];

		// for($i=1; $i<15; $i++) {
		// 	$ext = sprintf("%02d", $i);
		// 	$users[] = [
		// 		'name' => 'user'.$ext,
		// 		'email' => 'user'.$ext.'@sabry.fr',
		// 		'password' => Hash::make('user'),
		// 		'gender' => 'male',
		// 		'created_at' => $datetime,
		// 		'updated_at' => $datetime,
		// 	];
		// }

		DB::table('users')->insert($users);

		$ismail = [
			[
				'name' => 'ismail',
				'email' => 'ismail@sabry.fr',
				'password' => Hash::make('ismail'),
				'gender' => 'male',
				'profile' => 'pics/ismail.png',
				'created_at' => $datetime,
				'updated_at' => $datetime,
			],
		];
		DB::table('users')->insert($ismail);

	}
}
