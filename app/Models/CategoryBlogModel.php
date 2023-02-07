<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryBlogModel extends Model
{
    use HasFactory;
    protected $table = 'category_blog';
    protected $guarded = [];
}
