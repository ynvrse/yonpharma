<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Diabetes',
                'slug' => 'diabetes',
                'icon' => "img/category/ic-diabetes-filled.svg",
            ],
            [
                'name' => 'Fitness',
                'slug' => 'fitness',
                'icon' => "img/category/ic-fitness-filled.svg",
            ],
            [
                'name' => 'Vitamins',
                'slug' => 'vitamins',
                'icon' => "img/category/ic-vitamins-filled.svg",
            ],
            [
                'name' => 'Surgicals',
                'slug' => 'surgicals',
                'icon' => "img/category/ic-surgicals-filled.svg",
            ],
        ];

        foreach($categories as $category){
            Category::create($category);
        }

    }
}
