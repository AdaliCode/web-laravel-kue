<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        function getCategoryData($name = 'breads')
        {
            $category = new Category();
            $category->name = ucwords($name);
            $category->id = Str::slug($category->name);
            $category->save();
        }
        getCategoryData();
        getCategoryData('tradtional snacks');
        getCategoryData('chiffon & roll cakes');
        getCategoryData('donuts');
        getCategoryData('pastry and danish');
        getCategoryData('pudding');
        getCategoryData('cakes');
        getCategoryData('lapis');
        getCategoryData('cookies');
        getCategoryData('snack box');
    }
}
