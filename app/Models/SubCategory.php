<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;


    protected $table = 'sub_categorys_products';


    public function mainCat()
{
    return $this->belongsTo(Category::class , "category_id");
}


public function products()
{
    return $this->HasMany(product::class,'subcategory_id');
}


}
