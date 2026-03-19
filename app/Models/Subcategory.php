<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Subcategory extends Model
{
    protected $fillable = ['name', 'category_id'];
    use HasFactory;
    
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
