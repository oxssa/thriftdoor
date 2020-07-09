<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('users')->delete();

        \DB::table('users')->insert(array (
            0 =>
            array (
                'id' => 1,
                'role_id' => 1,
                'name' => 'admin',
                'email' => 'admin@thriftdoor.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$eprruQVniiCcxFe93PHQYe8nCOUw8vrmGDcbcOCuxe1sQIEyyGZhu',
                'remember_token' => 'xIMgCiCamk5XixXn0iTfgZ1ehhfvL3I7sg63MINPhZLcvRbCzzqWHMgNMPy6',
                'settings' => NULL,
                'created_at' => '2020-07-06 03:41:29',
                'updated_at' => '2020-07-09 01:55:21',
            ),
            1 =>
            array (
                'id' => 2,
                'role_id' => 2,
                'name' => 'okssa',
                'email' => 'okssa@thriftdoor.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$6/N9pkNG8n6ulFUEEhUtV.bgncpT4WSg1lubWNVDF2tfH1QqVS4fO',
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => '2020-07-06 03:42:13',
                'updated_at' => '2020-07-06 03:42:13',
            ),
            2 =>
            array (
                'id' => 3,
                'role_id' => 2,
                'name' => 'ridone',
                'email' => 'ridone@thriftdoor.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$QBU8.YEXgy1Ny942mfNbkejBhEoi8rC2IcG49uK1lkgAWvyUOvbiq',
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => '2020-07-06 03:43:25',
                'updated_at' => '2020-07-06 03:43:25',
            ),
        ));


    }
}
