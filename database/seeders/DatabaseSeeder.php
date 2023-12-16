<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MainCategory;
use App\Models\SubCategory;
use App\Models\SubCategorytwo;
use App\Models\ThirdCategory;
use App\Models\Category;
use App\Models\AccountingPanal;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        /*MainCategory::factory(6)->create();
       SubCategory::factory(6)->create();
       
       ThirdCategory::factory(6)->create();*/
       //Category::factory(6)->create();


       AccountingPanal::factory()->count(5)->create();


       /*$topLevelCategories = Category::factory(5)->create();

       // Create child categories for each top-level category
       $topLevelCategories->each(function ($category) {
           $children = Category::factory(3)->create(['parent_id' => $category->id]);

           // Create grandchildren for each child category if needed
           $children->each(function ($child) {
               Category::factory(2)->create(['parent_id' => $child->id]);
           });
       });*/

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
