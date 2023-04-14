<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Factory as FakerFactory;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = FakerFactory::create();
        for ($i = 0; $i < 10; $i++) {
            $product = new Product;
            $product->name = $faker->word;
            $product->description = $faker->sentence;
            $product->price = $faker->randomFloat(2, 10, 100);
            $product->image = $faker->imageUrl();
            $product->reference_product = uniqid(); // génère une référence unique
            $product->dimensions = $faker->randomNumber() . ' x ' . $faker->randomNumber() . ' x ' . $faker->randomNumber();
            $product->materials = $faker->word . ', ' . $faker->word . ', ' . $faker->word;
            $product->color = $faker->colorName;
            $product->save();
        }

    }
}
