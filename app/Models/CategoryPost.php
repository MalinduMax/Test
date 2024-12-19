<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryPost extends Model
{
    use HasFactory;

    protected $table = 'fblog_category_fblog_post'; // Specify the table name if it's not pluralized

    protected $fillable = ['post_id', 'category_id'];
}
