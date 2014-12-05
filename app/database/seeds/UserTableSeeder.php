// app/database/seeds/UserTableSeeder.php

<?php

class UserTableSeeder extends Seeder
{

	public function run()
	{
		DB::table('users')->delete();
		User::create(array(
			'name'     => 'Chris Sevilleja',
			'username' => 'admin',
			'email'    => 'chriss.innocent@gmail.com',
			'password' => Hash::make('admin'),
		));
	}

}
