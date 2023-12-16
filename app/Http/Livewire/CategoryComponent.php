<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\MainCategory;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\ThirdCategory;

class CategoryComponent extends Component
{
    public $categories;
    public $thirdCategories;
    public $category_name;
    public $parent_category_name;
    public function mount(){
        $this->categories = null;
        $this->thirdCategories = null;
        $this->category_name = null;
        $this->parent_category_name = null;

    }
    private function get_category_by_name($categoryName){
        $lowerCaseCategoryName = strtolower($categoryName);
        //$user_id = DB::table('users')->where('username', $user_input)->first()->id;
        $category = Category::where('name', '=', $categoryName)->first();
        return $category ;
    }
    public function saveToDatabase(){
        $p_id = $this->parent_category_name;
        if ($p_id)
        {
            $category = Category::create([
                'name' => $this->category_name,
                'parent_id' => $p_id,
            ]);
        }
        $this->reset();
        $this->mount();
        // Trigger a full-page refresh
        //$this->emit('$refresh');
    }
    public function render()
    {
        //$this->categories =MainCategory::with('subcategories')->get();
        //$this->thirdCategories = SubCategory::with('thirdcategory')->get();
        $this->categories = Category::with('children')->whereNull('parent_id')->get();
        return view('livewire.category-component')->layout('layouts.base');
    }
}
