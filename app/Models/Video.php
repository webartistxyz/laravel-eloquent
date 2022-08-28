<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    //polymorphic
    public function watchable(): \Illuminate\Database\Eloquent\Relations\MorphTo
    {
        return $this->morphTo('watchable');
    }
}
