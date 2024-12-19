<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // Specify the table name if it doesn't follow Laravel's naming convention
    protected $table = 'fblog_posts'; // You can also use config('filamentblog.tables.prefix').'posts' if needed

    // Specify the fillable fields
    protected $fillable = [
        'title',
        'slug',
        'sub_title',
        'body',
        'status',
        'published_at',
        'scheduled_for',
        'cover_photo_path',
        'photo_alt_text',
        'user_id', // Assuming this is the foreign key for the user
    ];

    // Optionally, you can define relationships
    public function user()
    {
        return $this->belongsTo(config('filamentblog.user.model'));
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_post');
    }

    public function seoDetail()
    {
        return $this->hasOne(SeoDetail::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'post_tag');
    }
}
