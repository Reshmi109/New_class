<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'image',
        'sku',
        'deatils',
        'category_id',
        'stock',
    ];


    //table relationship (one to many) between prodcuts and catagories
    public function category(){
    return $this->belongsTo(Category::class);
}


}
