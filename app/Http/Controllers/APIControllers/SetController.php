<?php

namespace App\Http\Controllers\APIControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SetController extends Controller
{
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
                if($parent)
                {$parentId = $parent->id;}
                else                
                {return ["result" => "Please enter valed parent name."];}
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
