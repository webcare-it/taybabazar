<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;

    protected $fillable = ['cat_id', 'name', 'slug', 'image'];

    public function category()
    {
        return $this->belongsTo(Category::class, 'cat_id', 'id');
    }

    public function products()
    {
        return $this->hasMany(Product::class, 'sub_cat_id', 'id');
    }

    public function brands()
    {
        return $this->hasMany(Brand::class);
    }
}
