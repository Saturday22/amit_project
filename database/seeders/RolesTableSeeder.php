<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class RolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('roles')->delete();

        DB::table('roles')->insert(array (
            0 =>
            array (
                'Id' => 1,
                'Name' => 'Admin',
            ),
            1 =>
            array (
                'Id' => 2,
                'Name' => 'Customer',
            ),
        ));


    }
}
