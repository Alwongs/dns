<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'Airbus-380', 
                'code' => 'a-380', 
                'description' => 'Самый большой пассажирский самолет в мире', 
                'price' => 490000000, 
                'count' => 4,
                'image' => 'products/a-380.jpg',
                'new' => 1,
                'hit' => 0,   
                'recommend' => 0,             
                'category_id' => 1, 
            ],
            [
                'name' => 'Boeing-747', 
                'code' => 'b-747', 
                'description' => 'Двухпалубный пассажирский самолет', 
                'price' => 325000000, 
                'count' => 4,
                'image' => 'products/b-747.jpg',
                'new' => 0,
                'hit' => 1,   
                'recommend' => 0,  
                'category_id' => 1, 
            ],
            [
                'name' => 'IL-96', 
                'code' => 'il-96', 
                'description' => 'Отечественный пассажирский широкофезюляжный самолет', 
                'price' => 120000000, 
                'count' => 4,
                'image' => 'products/il-96.jpg',
                'new' => 0,
                'hit' => 0,   
                'recommend' => 1,  
                'category_id' => 1, 
            ],
            [
                'name' => 'Boeing-787', 
                'code' => 'b-787', 
                'description' => 'Пассажирский широкофезюляжный самолет с двумя мощными двигателями', 
                'price' => 290000000, 
                'count' => 4,
                'image' => 'products/b-787.jpg',
                'new' => 0,
                'hit' => 0,   
                'recommend' => 1,  
                'category_id' => 1, 
            ],
            [
                'name' => 'Airbus A-320', 
                'code' => 'a-320', 
                'description' => 'Пассажирский самолет для среднийх дистанций', 
                'price' => 94000000, 
                'count' => 4,
                'image' => 'products/a-320.jpg',
                'new' => 0,
                'hit' => 0,   
                'recommend' => 1,  
                'category_id' => 1, 
            ],




            [
                'name' => 'Boeing-747-F', 
                'code' => 'b-747-f', 
                'description' => 'Самолет для перевозки контейнерных грузов', 
                'price' => 419000000, 
                'count' => 4,
                'image' => 'products/b-747-f.jpg',
                'new' => 0,
                'hit' => 1,   
                'recommend' => 1,  
                'category_id' => 2, 
            ],

            [
                'name' => 'An-124', 
                'code' => 'an-124', 
                'description' => 'Самолет для перевозки нестандартных грузов', 
                'price' => 13000000, 
                'count' => 4,
                'image' => 'products/an-124.jpg',
                'new' => 1,
                'hit' => 0,   
                'recommend' => 0,                  
                'category_id' => 2, 
            ],
            [
                'name' => 'IL-76', 
                'code' => 'il-76', 
                'description' => 'Популярный отечественный самолет для первозки грузов', 
                'price' => 46000000, 
                'count' => 4,
                'image' => 'products/il-76.jpg',
                'new' => 0,
                'hit' => 0,   
                'recommend' => 0,  
                'category_id' => 2, 
            ],

            [
                'name' => 'Cirrus Vision Jet', 
                'code' => 'cirrus-vision-jet', 
                'description' => 'Современный реактивный легкий самолет', 
                'price' => 2850000, 
                'count' => 4,
                'image' => 'products/cirrus-vision-jet.jpg',
                'new' => 0,
                'hit' => 1,   
                'recommend' => 1,  
                'category_id' => 3, 
            ],

            [
                'name' => 'Cessna', 
                'code' => 'cessna', 
                'description' => 'Самый популярный легкий самолет', 
                'price' => 200000, 
                'count' => 4,
                'image' => 'products/cessna.jpg',
                'new' => 1,
                'hit' => 0,   
                'recommend' => 0,                  
                'category_id' => 3, 
            ],
            [
                'name' => 'A-27', 
                'code' => 'a-27', 
                'description' => 'Двухместный самолет самарского производства', 
                'price' => 22000, 
                'count' => 4,
                'image' => 'products/a-27.jpg',
                'new' => 0,
                'hit' => 0,   
                'recommend' => 0,  
                'category_id' => 3, 
            ],


        ]);

        // DB::table('products')->insert([
        //     [
        //         'name' => 'Интел Селерон 4', 
        //         'code' => 'intel-celeron-4', 
        //         'description' => 'Компьютер для игр', 
        //         'price' => 20000, 
        //         'count' => 4,
        //         'image' => 'products/intel-seleron-4.jpg',
        //         'new' => 1,
        //         'hit' => 0,   
        //         'recommend' => 0,             
        //         'category_id' => 1, 
        //     ],
        //     [
        //         'name' => 'Intel Pentium 2', 
        //         'code' => 'intel-pentium-2', 
        //         'description' => 'Компьютер для офиса', 
        //         'price' => 15000, 
        //         'count' => 4,
        //         'image' => 'products/intel-pentium-2.jpg',
        //         'new' => 0,
        //         'hit' => 1,   
        //         'recommend' => 0,  
        //         'category_id' => 1, 
        //     ],

        //     [
        //         'name' => 'Iphone 4', 
        //         'code' => 'iphone-4', 
        //         'description' => 'Смартфон от Apple на IOS', 
        //         'price' => 20000, 
        //         'count' => 4,
        //         'image' => 'products/iphone-4.jpg',
        //         'new' => 0,
        //         'hit' => 0,   
        //         'recommend' => 1,  
        //         'category_id' => 2, 
        //     ],
        //     [
        //         'name' => 'Samsung s3', 
        //         'code' => 'samsung-s3', 
        //         'description' => 'Смартфон с большим экраном на Андроид', 
        //         'price' => 25000, 
        //         'count' => 4,
        //         'image' => 'products/samsung-galaxy-s3.jpg',
        //         'new' => 0,
        //         'hit' => 1,   
        //         'recommend' => 1,  
        //         'category_id' => 2, 
        //     ],

        //     [
        //         'name' => 'Apple Watch', 
        //         'code' => 'apple-watch', 
        //         'description' => 'Часы от Эппл', 
        //         'price' => 15000, 
        //         'count' => 4,
        //         'image' => 'products/apple-watch.jpg',
        //         'new' => 1,
        //         'hit' => 0,   
        //         'recommend' => 0,                  
        //         'category_id' => 3, 
        //     ],
        //     [
        //         'name' => 'Galaxy Watch 3', 
        //         'code' => 'galaxy-watch-3', 
        //         'description' => 'Часы от Самсунг совместимы с Android', 
        //         'price' => 19000, 
        //         'count' => 4,
        //         'image' => 'products/samsung-galaxy-watch-3.jpg',
        //         'new' => 0,
        //         'hit' => 0,   
        //         'recommend' => 0,  
        //         'category_id' => 3, 
        //     ],
        // ]);
    }
}
