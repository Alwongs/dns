<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Админ',
                'email' => 'admin@example.ru',
                'password' => bcrypt('12345678'),
                'is_admin' => 1
            ],
            [
                'name' => 'Клиент',
                'email' => 'customer@example.ru',
                'password' => bcrypt('12345678'),
                'is_admin' => 0
            ],
        ]);
    }
}
