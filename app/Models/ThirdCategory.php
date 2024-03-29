<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ThirdCategory extends Model
{
    use HasFactory;
    public function subCategory()
    {
        return $this->belongsTo(SubCategory::class);
    }
}
