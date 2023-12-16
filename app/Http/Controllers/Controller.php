<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\ThirdCategory;
use App\Models\SubCategory;
use App\Models\MainCategory;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function data(){
        //return SubCategory::with('thirdcategory')->get();
        return MainCategory::with('subcategories.thirdcategory')->get();
    }
}
