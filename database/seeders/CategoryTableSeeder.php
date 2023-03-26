<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'name' => 'Компьютеры', 
                'code' => 'computers', 
                'description' => 'Настольные компьютеры и ноутбуки', 
                'image' => 'categories/computers.jpg'
            ],
            [
                'name' => 'Смартфоны', 
                'code' => 'smartphones', 
                'description' => 'Мобильные телефоны от Apple и Android', 
                'image' => 'categories/smartphones.jpg'
            ],
            [
                'name' => 'Часы', 
                'code' => 'watches', 
                'description' => 'Умные часы и фитнес-треккеры', 
                'image' => 'categories/watches.jpg'
            ],
        ]);
    }
}
