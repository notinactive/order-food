<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Seeder;

class MenuTableSeeder extends Seeder
{
    public function run()
    {
        $menus = [
            [
                'title' => 'غذاهای بین الملل',
                'description' => 'تنوعی از غذاهای ملل مختلف',
                'status' => 'enabled',
            ],
            [
                'title' => 'غذاهای رژیمی',
                'description' => 'مناسب برای تناسب اندام',
                'status' => 'enabled',
            ],
            [
                'title' => 'غذاهای گیاهی',
                'description' => 'مناسب برای رژیم های گیاهی',
                'status' => 'enabled',
            ],
            [
                'title' => 'فست فود',
                'description' => 'آماده سازی سریع',
                'status' => 'enabled',
            ],
            [
                'title' => 'غذای کودک',
                'description' => 'مناسب برای کودکان و نوزادان',
                'status' => 'enabled',
            ],
        ];

        Menu::insert($menus);
    }
}
