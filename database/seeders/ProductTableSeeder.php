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
                'price' => 20000, 
                'count' => 4,
                'image' => 'products/intel-seleron-4.jpg',
                'new' => 1,
                'hit' => 0,   
                'recommend' => 0,             
                'category_id' => 1, 
            ],
            [
                'name' => 'Intel Pentium 2', 
                'code' => 'intel-pentium-2', 
                'description' => 'Компьютер для офиса', 
                'price' => 15000, 
                'count' => 4,
                'image' => 'products/intel-pentium-2.jpg',
                'new' => 0,
                'hit' => 1,   
                'recommend' => 0,  
                'category_id' => 1, 
            ],

            [
                'name' => 'Iphone 4', 
                'code' => 'iphone-4', 
                'description' => 'Смартфон от Apple на IOS', 
                'price' => 20000, 
                'count' => 4,
                'image' => 'products/iphone-4.jpg',
                'new' => 0,
                'hit' => 0,   
                'recommend' => 1,  
                'category_id' => 2, 
            ],
            [
                'name' => 'Samsung s3', 
                'code' => 'samsung-s3', 
                'description' => 'Смартфон с большим экраном на Андроид', 
                'price' => 25000, 
                'count' => 4,
                'image' => 'products/samsung-galaxy-s3.jpg',
                'new' => 0,
                'hit' => 1,   
                'recommend' => 1,  
                'category_id' => 2, 
            ],

            [
                'name' => 'Apple Watch', 
                'code' => 'apple-watch', 
                'description' => 'Часы от Эппл', 
                'price' => 15000, 
                'count' => 4,
                'image' => 'products/apple-watch.jpg',
                'new' => 1,
                'hit' => 0,   
                'recommend' => 0,                  
                'category_id' => 3, 
            ],
            [
                'name' => 'Galaxy Watch 3', 
                'code' => 'galaxy-watch-3', 
                'description' => 'Часы от Самсунг совместимы с Android', 
                'price' => 19000, 
                'count' => 4,
                'image' => 'products/samsung-galaxy-watch-3.jpg',
                'new' => 0,
                'hit' => 0,   
                'recommend' => 0,  
                'category_id' => 3, 
            ],
        ]);
    }
}
