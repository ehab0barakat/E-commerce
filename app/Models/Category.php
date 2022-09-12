<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;


    protected $table = 'categorys_products';


    public function subCats()
{
    return $this->HasMany(SubCategory::class,'category_id');
}



    public function Cat()
{
    return $this->HasMany(product::class,'category_id');
}







}
