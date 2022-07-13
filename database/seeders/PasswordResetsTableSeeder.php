<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class PasswordResetsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('password_resets')->delete();

        DB::table('password_resets')->insert(array (
            0 =>
            array (
                'email' => 'omar@test.com',
                'token' => '$2y$10$dcQpatfusuSUCKYmlmTWiuTJqVqyCegR7NeZ8FiXEtyNdD4zo/gwe',
                'created_at' => '2022-07-04 19:13:35',
            ),
        ));


    }
}
