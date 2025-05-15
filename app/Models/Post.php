<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'content',
        'user_id',
        'published_at',
    ];

    protected $dates = [
        'published_at',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($post) {
            $post->published_at = now();
        });
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
