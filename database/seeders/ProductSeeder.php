<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product; //

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'category_id' => '4',
            'product_name' => 'Grilled Fish',
            'description' => 'Delicious Food',
            'product_price' => '27000',
            'image' => 'https://images.pexels.com/photos/262959/pexels-photo-262959.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
            'stock' => '10',
            'rating' => '4.3'
        ]);

        Product::create([
            'category_id' => '4',
            'product_name' => 'Chicken strips',
            'description' => 'Delicious Foods',
            'product_price' => '13000',
            'image' => 'https://images.pexels.com/photos/1059943/pexels-photo-1059943.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
            'stock' => '10',
            'rating' => '4.6'
        ]);

        Product::create([
            'category_id' => '4',
            'product_name' => 'Burrito',
            'description' => 'Delicious Food',
            'product_price' => '12000',
            'image' => 'https://images.pexels.com/photos/461198/pexels-photo-461198.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
            'stock' => '10',
            'rating' => '4.3'
        ]);

        Product::create([
            'category_id' => '4',
            'product_name' => 'Pasta',
            'description' => 'Delicious Food',
            'product_price' => '15000',
            'image' => 'https://images.pexels.com/photos/1527603/pexels-photo-1527603.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
            'stock' => '10',
            'rating' => '4.8'
        ]);
    }
}
