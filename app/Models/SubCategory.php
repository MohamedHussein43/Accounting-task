<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function thirdcategory(){
        return $this->hasMany(ThirdCategory::class);
    }
    public function subcategoriestwo()
    {
        return $this->hasMany(SubCategorytwo::class, 'sub_category_id');
    }
}
