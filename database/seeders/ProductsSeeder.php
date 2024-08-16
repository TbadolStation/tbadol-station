<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'title' => 'Product 1',
            'desc' => 'Lorem Ipsum is simply dummy text.',
            'category_id' => 2,
        ]);

        Product::create([
            'title' => 'Product 2',
            'desc' => 'Lorem Ipsum is simply dummy text.',
            'category_id' => 1,
        ]);

        Product::create([
            'title' => 'Product 3',
            'desc' => 'Lorem Ipsum is simply dummy text.',
            'category_id' => 1,
        ]);

        Product::create([
            'title' => 'Product 4',
            'desc' => 'Lorem Ipsum is simply dummy text.',
            'category_id' => 2,
        ]);
    }
}
