<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Factory as FakerFactory;

class ProductTableSeeder extends Seeder
{

    public function run()
    {
        $faker = FakerFactory::create();

        for ($i = 0; $i < 10; $i++) {
            $product = new Product;
            $product->name = $faker->word;
            $product->description = $faker->sentence;
            $product->image_principal = $faker->imageUrl();
            $product->price = $faker->randomFloat(2, 10, 100);
            $product->reference_product = uniqid();
            $product->tag = '#accessoire';
            $product->fournisseur_id = 1;
            $product->categorie_id = $faker->numberBetween(1, 5);
            $product->save();
        }
    }
}
