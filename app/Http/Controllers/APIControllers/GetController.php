<?php

namespace App\Http\Controllers\APIControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Validator;
class GetController extends Controller
{
    public function ListCategories(){
        return Category::all();
    }
    public function GetCategoryByName($name = null){
        return $name? Category::where('name',$name)->first() : ["name" => "You have to enter a name"];        
    }
    public function AddNewCategory(Request $req){
        $roles = array(
            "name" => "required",
            "parent_name" => "required",
        );
        
        $validator = Validator::make($req->all(), $roles);
        if($validator->fails()){
            return $validator->errors();
        }
        else{
            $parentId;
            if($req->name)
            {
                $parent = $this->GetCategoryByName($req->parent_name);
                $parentId = $parent->id;
            }

                $category = new Category();
                $category->name = $req->name;
                $category->parent_id = $parentId;
                $result = $category->save();
                    
                if($result){
                    return ["Result" => "Data has been saved successfully!"];
                }
                else{
                    return ["Result" => "Something went wrong"];
                }
         }
    }
}
