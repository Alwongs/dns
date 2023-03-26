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
                'name' => 'Интел Селерон 4', 
                'code' => 'intel-celeron-4', 
                'description' => 'Компьютер для игр', 
                'price' => 20000, 'image' => 'products/intel-seleron-4.jpg',
                'category_id' => 1, 
            ],
            [
                'name' => 'Intel Pentium 2', 
                'code' => 'intel-pentium-2', 
                'description' => 'Компьютер для офиса', 
                'price' => 15000, 'image' => 'products/intel-pentium-2.jpg',
                'category_id' => 1, 
            ],

            [
                'name' => 'Iphone 4', 
                'code' => 'iphone-4', 
                'description' => 'Смартфон от Apple на IOS', 
                'price' => 20000, 
                'image' => 'products/iphone-4.jpg',
                'category_id' => 2, 
            ],
            [
                'name' => 'Samsung s3', 
                'code' => 'samsung-s3', 
                'description' => 'Смартфон с большим экраном на Андроид', 
                'price' => 25000, 
                'image' => 'products/samsung-galaxy-s3.jpg',
                'category_id' => 2, 
            ],

            [
                'name' => 'Apple Watch', 
                'code' => 'apple-watch', 
                'description' => 'Часы от Эппл', 
                'price' => 15000, 
                'image' => 'products/apple-watch.jpg',
                'category_id' => 3, 
            ],
            [
                'name' => 'Galaxy Watch 3', 
                'code' => 'galaxy-watch-3', 
                'description' => 'Часы от Самсунг совместимы с Android', 
                'price' => 19000, 
                'image' => 'products/samsung-galaxy-watch-3.jpg',
                'category_id' => 3, 
            ],
        ]);
    }
}
