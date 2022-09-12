<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';


    public function mainCat()
    {
        return $this->belongsTo(Category::class , "category_id");
    }



    public function subCat()
    {
        return $this->belongsTo(SubCategory::class , "subcategory_id");
    }




}
