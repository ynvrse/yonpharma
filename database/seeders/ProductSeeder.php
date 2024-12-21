<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'category_id' => 1,
                'name' => 'NPH',
                'slug' => 'nph',
                'price' => 100000,
                'photo' => 'img/product/product-1.webp',
                'about' => 'NPH (Neutral Protamine Hagedorn) is an intermediate-acting insulin used to manage type 1 and type 2 diabetes. It provides a relatively consistent level of insulin in the bloodstream for about 18-24 hours.',
            ],
            [
                'category_id' => 2,
                'name' => 'Whey Protein',
                'slug' => 'whey-protein',
                'price' => 120000,
                'photo' => 'img/product/product-2.webp',
                'about' => 'Whey protein is a fast-digesting protein derived from milk, providing a quick source of amino acids to support muscle growth, repair, and recovery after exercise.',
            ],
            [
                'category_id' => 3,
                'name' => 'Vitamin C',
                'slug' => 'vitamin-c',
                'price' => 10000,
                'photo' => 'img/product/product-3.webp',
                'about' => 'Vitamin C is an essential nutrient that plays a vital role in various bodily functions, including immune support, collagen synthesis, and antioxidant defense.',
            ],
            [
                'category_id' => 4,
                'name' => 'Surgical Mask',
                'slug' => 'surgical-mask',
                'price' => 150000,
                'photo' => 'img/product/product-4.webp',
                'about' => 'Surgical masks are disposable face coverings designed to protect the wearer from airborne particles and droplets, commonly used in healthcare settings and during periods of respiratory illness outbreaks.',
                
            ]
        ];

        foreach($products as $product){
            Product::create($product);
        }

    }
}
