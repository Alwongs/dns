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
                'name' => 'Пассажирские', 
                'code' => 'passenger-planes', 
                'description' => 'пассажирские самолеты вместимостю более 10 мест', 
                'image' => 'categories/passenger-planes.jpg'
            ],
            [
                'name' => 'Грузовые', 
                'code' => 'cargo-planes', 
                'description' => 'Самолеты для перевозки контейнерных и негабаритных грузов', 
                'image' => 'categories/cargo-planes.jpg'
            ],
            [
                'name' => 'Легкая авиация', 
                'code' => 'light-weight-planes', 
                'description' => 'Самолеты малой вместимости', 
                'image' => 'categories/light-weight-planes.jpg'
            ],
        ]);





















        // DB::table('categories')->insert([
        //     [
        //         'name' => 'Компьютеры', 
        //         'code' => 'computers', 
        //         'description' => 'Настольные компьютеры и ноутбуки', 
        //         'image' => 'categories/computers.jpg'
        //     ],
        //     [
        //         'name' => 'Смартфоны', 
        //         'code' => 'smartphones', 
        //         'description' => 'Мобильные телефоны от Apple и Android', 
        //         'image' => 'categories/smartphones.jpg'
        //     ],
        //     [
        //         'name' => 'Часы', 
        //         'code' => 'watches', 
        //         'description' => 'Умные часы и фитнес-треккеры', 
        //         'image' => 'categories/watches.jpg'
        //     ],
        // ]);
    }
}
