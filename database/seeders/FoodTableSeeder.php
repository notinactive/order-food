<?php

namespace Database\Seeders;

use App\Models\Food;
use App\Models\Menu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FoodTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $foods = [
            [
                'title' => 'چلوکباب زعفرانی',
                'description' => 'فوق العاده با کیفیت',
                'warehouse_inventory' => 15,
                'status' => 'enabled',
            ],
            ['title' => 'خوراک مرغ سرخ شده',
                'description' => 'کاملا تازه و پخته شده',
                'warehouse_inventory' => 5,
                'status' => 'enabled',
            ],
            [
                'title' => 'پیتزا مخصوص',
                'description' => 'آماده سازی سریع',
                'warehouse_inventory' => 25,
                'status' => 'enabled',
            ],
            [
                'title' => 'ساندویچ هات داگ',
                'description' => 'فوق العاده لذیذ',
                'warehouse_inventory' => 0,
                'status' => 'enabled',
            ],
            [
                'title' => 'باقالی پلو با گوشت',
                'description' => 'غذای سنتی با کیفیت',
                'warehouse_inventory' => 6,
                'status' => 'enabled',
            ],
        ];

        Food::insert($foods);

        Food::all()->each(function ($food) {

            $menu = Menu::all()->random();
            $food->menus()->attach($menu->id);

        });
    }
}
