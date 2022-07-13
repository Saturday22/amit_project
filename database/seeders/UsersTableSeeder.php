<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('users')->delete();

        DB::table('users')->insert(array (
            0 =>
            array (
                'id' => 23,
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$DcT.Qecx4/ZVBq7bpFRtZOh1td53kuPwzo4bt.cCcxq4e.SfKRyF6',
                'remember_token' => NULL,
                'created_at' => '2022-07-13 18:03:34',
                'updated_at' => '2022-07-13 18:03:34',
                'role_id' => '1',
                'age' => NULL,
                'gender' => NULL,
            ),
            1 =>
            array (
                'id' => 24,
                'name' => 'Mohamed',
                'email' => 'mohamed@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$CA5uDJrw0t7sRR13YhdDnejiIL5o7BLVxHJOnR8AbcN3YWKKB2vaO',
                'remember_token' => NULL,
                'created_at' => '2022-07-13 18:04:57',
                'updated_at' => '2022-07-13 18:04:57',
                'role_id' => '0',
                'age' => NULL,
                'gender' => NULL,
            ),
        ));


    }
}
