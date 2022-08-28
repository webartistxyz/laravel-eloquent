<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = [];
    //many to many
    public function tags(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Tag::class)->withTimestamps();
    }

    //one to one
    public function user()
    {
        return $this->hasOne(User::class);
    }

    //many to many polymorphic
    public function like($user = null)
    {
        $user = $user ?: auth()->user();

        return $this->likes()->attach($user);
    }

    //many to many polymorphic
    public function likes()
    {
        return $this->morphToMany(User::class, 'likeable')->withTimestamps();
    }
}
