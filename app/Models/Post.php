<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'body', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }


    // Add a scope to get only the posts owned by the authenticated user
    public function scopeOwnedByUser($query, $userId)
    {
        return $query->where('user_id', $userId);
    }
}
