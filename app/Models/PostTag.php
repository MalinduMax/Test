<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostTag extends Model
{
    use HasFactory;

    protected $table = 'fblog_post_fblog_tag'; // Specify the table name if it's not pluralized

    protected $fillable = ['post_id', 'tag_id'];
}
