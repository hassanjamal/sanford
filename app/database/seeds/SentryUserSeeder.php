<?php

class SentryUserSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('users')->delete();

		Sentry::getUserProvider()->create(array(
	        'email'     => 'admin@bluecrystalgroup.in',
	        'login_id'   => 'Admin',
	        'password'  => 'admin123',
	        'activated' => 1,
	    ));

//	    Sentry::getUserProvider()->create(array(
//	        'email'     => 'user@bluecrystalgroup.in',
//	        'user_id'   => '10001',
//	        'password'  => 'user123',
//	        'activated' => 1,
//	    ));
	}

}