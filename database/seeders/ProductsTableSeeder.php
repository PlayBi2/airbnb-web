<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
          DB::table('product')->insert([
            'image_path' => 'sample_image.jpg',
            'name' => 'Sample Product',
            'price_per_month' => 100.00,
            'price' => 500.00,
            'address' => '123 Main Street',
            'rented' => false,
            'infor' => 'Additional information',
            'description' => 'Product description',
            'area' => 75.5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
