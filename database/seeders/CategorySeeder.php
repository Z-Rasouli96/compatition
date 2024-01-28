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
        \DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Category::truncate();
        \DB::statement('SET FOREIGN_KEY_CHECKS=1;');
       
        Category::factory()->count(2)->create()->each(function($category) {
            for ($i = 0; $i < 2; $i++) {
                $subCategory =$category->childCategories()->create(
                    [
                        'name' => fake()->name(),
                    ]
                );
                for ($j = 0; $j < 2; $j++) {
                    $subCategory->childCategories()->create(
                        [
                            'name' => fake()->name(),
                    ]);
                }
            }
           
        });
    }
}
