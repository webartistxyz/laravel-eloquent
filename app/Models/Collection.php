<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    use HasFactory;

    //polymorphic
    public function videos(): \Illuminate\Database\Eloquent\Relations\MorphMany
    {
        return $this->morphMany(Video::class, 'watchable_type');
    }
}
