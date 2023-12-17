<?php

namespace App\Http\Controllers\APIControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\AccountingPanal;
use Validator;
class UpdateController extends Controller
{
    public function UbdateOwner(Request $req){
        $roles =array(
            'owner_name'            => 'required|string|max:255',
            'service_name'          => 'required|string|max:255',
            'initial_price'         => 'required|numeric|min:0',
            'tax_type'              => 'required|in:0,1',
            'tax'                   => 'required|numeric|min:0',
            'admin_tax_type'        => 'required|in:0,1',
            'admin_tax'             => 'required|numeric|min:0',
            'total_owner_revenue'   => 'required|numeric|min:0',
            'total_admin_revenue'   => 'required|numeric|min:0',
        );
        $validator = Validator::make($req->all(), $roles);
        if($validator->fails()){
            return $validator->errors();
        }
        else{
                $owner = AccountingPanal::where('owner_name',$req->owner_name)->first();
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
                    return ["Result" => "Owner: ".$owner->owner_name." data has been updated successfully!"];
                }
                else{
                    return ["Result" => "Something went wrong"];
                }
        }
    }
}
