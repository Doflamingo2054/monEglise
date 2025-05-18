<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'content'];

    /**
     * Polymorphic relation to commentable models (e.g., Testimony, Prayer, etc.)
     */
    public function commentable()
    {
        return $this->morphTo();
    }

    /**
     * The user who made the comment
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
