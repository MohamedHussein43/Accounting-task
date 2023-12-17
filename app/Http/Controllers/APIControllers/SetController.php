<?php

namespace App\Http\Controllers\APIControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\AccountingPanal;
use Validator;
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
                $category = new GetController();
                $parent = $category->GetCategoryByName($req->parent_name);
                if($parent->getStatusCode() === 200)
                {
                    $parent = json_decode($parent->getContent(), true);
                    $parentId = $parent["id"];
                }
                else                
                {return ["result" => "Please enter valed parent name."];}
            }

                $category = new Category();
                $category->name = $req->name;
                $category->parent_id = $parentId;
                $result = $category->save();
                    
                if($result){
                    return ["Result" => "New Category has been added successfully!"];
                }
                else{
                    return ["Result" => "Something went wrong"];
                }
         }
    }
    public function AddNewOwner(Request $req){
        $roles =array(
            'owner_name'            => 'required|string|max:255',
            'service_name'          => 'required|string|max:255',
            'initial_price'         => 'required|numeric|min:0',
            'tax_type'              => 'required|in:0,1',
            'tax'                   => 'nullable|numeric|min:0',
            'admin_tax_type'        => 'required|in:0,1',
            'admin_tax'             => 'nullable|numeric|min:0',
            'total_owner_revenue'   => 'nullable|numeric|min:0',
            'total_admin_revenue'   => 'nullable|numeric|min:0',
        );
        $validator = Validator::make($req->all(), $roles);
        if($validator->fails()){
            return $validator->errors();
        }
        else{
            
            $owner = new AccountingPanal();
            $owner->owner_name          = $req->owner_name;
            $owner->service_name        = $req->service_name;
            $owner->initial_price       = $req->initial_price;
            $owner->tax_type            = $req->tax_type;
            $owner->tax                 = $req->tax;
            $owner->admin_tax_type      = $req->admin_tax_type;
            $owner->admin_tax           = $req->admin_tax;
            $owner->total_owner_revenue = $req->total_owner_revenue;
            $owner->total_admin_revenue = $req->total_admin_revenue;

            $result = $owner->save();
            if($result){
                return ["Result" => "New Owner has been added successfully!"];
            }
            else{
                return ["Result" => "Something went wrong"];
            }

        }
    }
}
