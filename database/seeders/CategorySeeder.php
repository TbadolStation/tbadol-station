<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // ID = 1
        Category::create([
           'title' => 'ادوات منزلية'
        ]);

        // ID = 2
        Category::create([
            'title' => 'اجهزة كمبيوتر'
        ]);
    }
}
