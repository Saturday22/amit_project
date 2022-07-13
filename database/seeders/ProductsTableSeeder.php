<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('products')->delete();
        
        \DB::table('products')->insert(array (
            0 => 
            array (
                'id' => 20,
                'product_name' => 't shirt',
                'product_price' => '100',
                'product_picture' => '1657042340.jpeg',
                'created_at' => '2022-07-05 17:32:20',
                'updated_at' => '2022-07-05 17:32:20',
                'category_id' => NULL,
                'category' => 't shirt',
            ),
            1 => 
            array (
                'id' => 21,
                'product_name' => 'Shoes',
                'product_price' => '100',
                'product_picture' => '1657042415.jpg',
                'created_at' => '2022-07-05 17:33:35',
                'updated_at' => '2022-07-05 17:33:35',
                'category_id' => NULL,
                'category' => 'Shoes',
            ),
            2 => 
            array (
                'id' => 22,
                'product_name' => 'Shorts',
                'product_price' => '250',
                'product_picture' => '1657042754.jpg',
                'created_at' => '2022-07-05 17:39:14',
                'updated_at' => '2022-07-05 17:39:14',
                'category_id' => NULL,
                'category' => 'Shorts',
            ),
            3 => 
            array (
                'id' => 23,
                'product_name' => 'shorts',
                'product_price' => '300',
                'product_picture' => '1657042790.jpg',
                'created_at' => '2022-07-05 17:39:50',
                'updated_at' => '2022-07-05 17:39:50',
                'category_id' => NULL,
                'category' => 'shorts',
            ),
            4 => 
            array (
                'id' => 25,
                'product_name' => 'Sneakers',
                'product_price' => '100',
                'product_picture' => '1657042887.webp',
                'created_at' => '2022-07-05 17:41:27',
                'updated_at' => '2022-07-05 17:41:27',
                'category_id' => NULL,
                'category' => 'Shoes',
            ),
            5 => 
            array (
                'id' => 26,
                'product_name' => 't shirt',
                'product_price' => '200',
                'product_picture' => '1657043067.webp',
                'created_at' => '2022-07-05 17:44:28',
                'updated_at' => '2022-07-05 17:44:28',
                'category_id' => NULL,
                'category' => 't shirt',
            ),
            6 => 
            array (
                'id' => 27,
                'product_name' => 't shirt',
                'product_price' => '200',
                'product_picture' => '1657044855.jpg',
                'created_at' => '2022-07-05 18:14:15',
                'updated_at' => '2022-07-05 18:14:15',
                'category_id' => NULL,
                'category' => 't shirt',
            ),
            7 => 
            array (
                'id' => 28,
                'product_name' => 't shirt',
                'product_price' => '200',
                'product_picture' => '1657044872.webp',
                'created_at' => '2022-07-05 18:14:32',
                'updated_at' => '2022-07-05 18:14:32',
                'category_id' => NULL,
                'category' => 't shirt',
            ),
            8 => 
            array (
                'id' => 29,
                'product_name' => 't shirt',
                'product_price' => '200',
                'product_picture' => '1657044893.webp',
                'created_at' => '2022-07-05 18:14:53',
                'updated_at' => '2022-07-05 18:14:53',
                'category_id' => NULL,
                'category' => 't shirt',
            ),
            9 => 
            array (
                'id' => 32,
                'product_name' => 'Pants',
                'product_price' => '200',
                'product_picture' => '1657046789.jpg',
                'created_at' => '2022-07-05 18:46:29',
                'updated_at' => '2022-07-05 18:46:29',
                'category_id' => NULL,
                'category' => 'Pants',
            ),
            10 => 
            array (
                'id' => 33,
                'product_name' => 'Pants',
                'product_price' => '100',
                'product_picture' => '1657046811.webp',
                'created_at' => '2022-07-05 18:46:51',
                'updated_at' => '2022-07-05 18:46:51',
                'category_id' => NULL,
                'category' => 'Pants',
            ),
            11 => 
            array (
                'id' => 34,
                'product_name' => 'Pants',
                'product_price' => '300',
                'product_picture' => '1657046861.jpeg',
                'created_at' => '2022-07-05 18:47:41',
                'updated_at' => '2022-07-05 18:47:41',
                'category_id' => NULL,
                'category' => 'Pants',
            ),
            12 => 
            array (
                'id' => 35,
                'product_name' => 'Pants',
                'product_price' => '100',
                'product_picture' => '1657047026.webp',
                'created_at' => '2022-07-05 18:50:26',
                'updated_at' => '2022-07-05 18:50:26',
                'category_id' => NULL,
                'category' => 'Pants',
            ),
            13 => 
            array (
                'id' => 36,
                'product_name' => 'Pants',
                'product_price' => '100',
                'product_picture' => '1657047045.webp',
                'created_at' => '2022-07-05 18:50:45',
                'updated_at' => '2022-07-05 18:50:45',
                'category_id' => NULL,
                'category' => 'Pants',
            ),
            14 => 
            array (
                'id' => 37,
                'product_name' => 'Pants',
                'product_price' => '100',
                'product_picture' => '1657047063.jpg',
                'created_at' => '2022-07-05 18:51:03',
                'updated_at' => '2022-07-05 18:51:03',
                'category_id' => NULL,
                'category' => 'Pants',
            ),
            15 => 
            array (
                'id' => 40,
                'product_name' => 'Shoes',
                'product_price' => '100',
                'product_picture' => '1657047585.webp',
                'created_at' => '2022-07-05 18:59:45',
                'updated_at' => '2022-07-05 18:59:45',
                'category_id' => NULL,
                'category' => 'Shoes',
            ),
            16 => 
            array (
                'id' => 41,
                'product_name' => 'Shoes',
                'product_price' => '100',
                'product_picture' => '1657047609.jpeg',
                'created_at' => '2022-07-05 19:00:09',
                'updated_at' => '2022-07-05 19:00:09',
                'category_id' => NULL,
                'category' => 'Shoes',
            ),
            17 => 
            array (
                'id' => 42,
                'product_name' => 'Shoes',
                'product_price' => '200',
                'product_picture' => '1657047634.jpg',
                'created_at' => '2022-07-05 19:00:34',
                'updated_at' => '2022-07-05 19:00:34',
                'category_id' => NULL,
                'category' => 'Shoes',
            ),
            18 => 
            array (
                'id' => 43,
                'product_name' => 'Shoes',
                'product_price' => '100',
                'product_picture' => '1657047679.jpg',
                'created_at' => '2022-07-05 19:01:19',
                'updated_at' => '2022-07-05 19:01:19',
                'category_id' => NULL,
                'category' => 'Shoes',
            ),
            19 => 
            array (
                'id' => 44,
                'product_name' => 'Shoes',
                'product_price' => '150',
                'product_picture' => '1657125721.jpg',
                'created_at' => '2022-07-06 16:42:01',
                'updated_at' => '2022-07-06 16:42:01',
                'category_id' => NULL,
                'category' => 'Shoes',
            ),
            20 => 
            array (
                'id' => 45,
                'product_name' => 'Shoes',
                'product_price' => '80',
                'product_picture' => '1657125742.jpg',
                'created_at' => '2022-07-06 16:42:22',
                'updated_at' => '2022-07-06 16:42:22',
                'category_id' => NULL,
                'category' => 'Shoes',
            ),
            21 => 
            array (
                'id' => 46,
                'product_name' => 'Shoes',
                'product_price' => '120',
                'product_picture' => '1657125760.jpg',
                'created_at' => '2022-07-06 16:42:40',
                'updated_at' => '2022-07-06 16:42:40',
                'category_id' => NULL,
                'category' => 'Shoes',
            ),
            22 => 
            array (
                'id' => 47,
                'product_name' => 'Shoes',
                'product_price' => '110',
                'product_picture' => '1657125777.jpg',
                'created_at' => '2022-07-06 16:42:58',
                'updated_at' => '2022-07-06 16:42:58',
                'category_id' => NULL,
                'category' => 'Shoes',
            ),
            23 => 
            array (
                'id' => 48,
                'product_name' => 'Pants',
                'product_price' => '300',
                'product_picture' => '1657125800.webp',
                'created_at' => '2022-07-06 16:43:20',
                'updated_at' => '2022-07-06 16:43:20',
                'category_id' => NULL,
                'category' => 'Pants',
            ),
            24 => 
            array (
                'id' => 49,
                'product_name' => 'Pants',
                'product_price' => '250',
                'product_picture' => '1657125832.jpg',
                'created_at' => '2022-07-06 16:43:52',
                'updated_at' => '2022-07-06 16:43:52',
                'category_id' => NULL,
                'category' => 'Pants',
            ),
            25 => 
            array (
                'id' => 50,
                'product_name' => 'Pants',
                'product_price' => '250',
                'product_picture' => '1657125849.webp',
                'created_at' => '2022-07-06 16:44:09',
                'updated_at' => '2022-07-06 16:44:09',
                'category_id' => NULL,
                'category' => 'Pants',
            ),
            26 => 
            array (
                'id' => 51,
                'product_name' => 't shirt',
                'product_price' => '160',
                'product_picture' => '1657125873.webp',
                'created_at' => '2022-07-06 16:44:33',
                'updated_at' => '2022-07-06 16:44:33',
                'category_id' => NULL,
                'category' => 't shirt',
            ),
            27 => 
            array (
                'id' => 52,
                'product_name' => 't shirt',
                'product_price' => '140',
                'product_picture' => '1657125901.webp',
                'created_at' => '2022-07-06 16:45:01',
                'updated_at' => '2022-07-06 16:45:01',
                'category_id' => NULL,
                'category' => 't shirt',
            ),
            28 => 
            array (
                'id' => 53,
                'product_name' => 't shirt',
                'product_price' => '160',
                'product_picture' => '1657125939.avif',
                'created_at' => '2022-07-06 16:45:39',
                'updated_at' => '2022-07-06 16:45:39',
                'category_id' => NULL,
                'category' => 't shirt',
            ),
            29 => 
            array (
                'id' => 54,
                'product_name' => 't shirt',
                'product_price' => '130',
                'product_picture' => '1657125965.webp',
                'created_at' => '2022-07-06 16:46:05',
                'updated_at' => '2022-07-06 16:46:05',
                'category_id' => NULL,
                'category' => 't shirt',
            ),
        ));
        
        
    }
}