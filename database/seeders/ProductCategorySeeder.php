<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $deliveryServices = array(
            array(
                'name' => 'Margherita',
                'price' => 10.99,
                'description' => 'Classic pizza with tomato sauce, fresh mozzarella, and basil.'
            ),
            array(
                'name' => 'Pepperoni',
                'price' => 12.99,
                'description' => 'Pizza topped with pepperoni slices, tomato sauce, and mozzarella cheese.'
            ),
            array(
                'name' => 'Vegetarian',
                'price' => 11.99,
                'description' => 'Pizza loaded with fresh vegetables such as bell peppers, mushrooms, onions, and olives.'
            ),
            array(
                'name' => 'BBQ Chicken',
                'price' => 13.99,
                'description' => 'Pizza featuring barbecue sauce, grilled chicken, red onions, and mozzarella cheese.'
            ),
            
        );

        foreach ($deliveryServices as $food) {
            \App\Models\ProductCategory::create([
                'name' => $food['name'],
                'slug' => \Illuminate\Support\Str::slug($food['name']),
                'description' => $food['description'],
                'price' => $food['price'],
            ]);
          }
    }
}