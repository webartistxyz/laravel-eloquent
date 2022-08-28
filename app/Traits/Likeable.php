<?php
namespace App\Traits;

use App\Models\User;

trait Likeable{
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
