<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class ProjectMedia extends Model

{
    protected $fillable = ['project_id', 'file_path', 'type', 'category_id', 'subcategory_id'];
    use HasFactory;

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function subcategory()
    {
        return $this->belongsTo(Subcategory::class);
    }
}
