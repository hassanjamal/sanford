<?php


class SentryUserGroupSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('users_groups')->delete();

//		$userUser  = Sentry::getUserProvider()->findByLogin('10001');
		$adminUser = Sentry::getUserProvider()->findByLogin('Admin');

//		$userGroup  = Sentry::getGroupProvider()->findByName('Users');
		$adminGroup = Sentry::getGroupProvider()->findByName('Admins');

	    // Assign the groups to the users
//	    $userUser->addGroup($userGroup);
	    $adminUser->addGroup($adminGroup);
	}

}