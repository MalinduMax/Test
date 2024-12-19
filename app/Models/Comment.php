<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $table = 'fblog_comments';

    protected $fillable = ['user_id', 'post_id', 'comment', 'approved', 'approved_at'];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
