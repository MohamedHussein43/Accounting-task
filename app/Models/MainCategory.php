<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainCategory extends Model
{
    protected $table = "categories";
    public function subcategories()
    {
        return $this->hasMany(Subcategory::class);
    }
    use HasFactory;
}
