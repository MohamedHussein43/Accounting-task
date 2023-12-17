<?php

namespace App\Http\Controllers\APIControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\AccountingPanal;
use Validator;
class GetController extends Controller
{
    public function ListCategories(){
        return Category::all();
    }
    public function ListOwners(){
        $admin_revene = AccountingPanal::sum('total_admin_revenue');
        $all_data = [
            "Total admin revenue" => $admin_revene,
            "All owners data" => AccountingPanal::all()
    ];
        return $all_data;
    }
    public function GetCategoryByName($name = null){
        if ($name){
            $category = Category::where('name',$name)->first();
            return $category ? response()->json($category,200) : response()->json(["Result" => "This category does not exist!"],400);   
        }     
        else return response()->json(["Result" => "You must pass the category name"],400);
    }

    public function getOwnerById($id = null){
        if ($id){
            $owner = AccountingPanal::find($id);
            return $owner ? $owner : ["Result" => "This owner does not exist!"];   
        }     
        else return ["Result" => "You must pass the owner ID"];     
    }

    public function getOwnerByName($name = null){
        if ($name){
            $owner = AccountingPanal::where('owner_name',$name)->first();
            return $owner ? $owner : ["Result" => "This owner does not exist!"];   
        }     
        else return ["Result" => "You must pass the owner name"];     
    }
    public function getAllAdminRevenue(){
        return AccountingPanal::sum('total_admin_revenue');
    }
    
}
