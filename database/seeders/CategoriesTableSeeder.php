<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('categories')->delete();

        DB::table('categories')->insert(array (
            0 =>
            array (
                'Id' => 1,
                'Name' => 'Tshirts',
            ),
            1 =>
            array (
                'Id' => 2,
                'Name' => 'Pants',
            ),
            2 =>
            array (
                'Id' => 3,
                'Name' => 'Shoes',
            ),
        ));


    }
}
