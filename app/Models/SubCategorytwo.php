<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategorytwo extends Model
{
    protected $table = "sub_categorytwos";
    use HasFactory;
    public function subcategory()
    {
        return $this->belongsTo(SubCategory::class);
    }
}
