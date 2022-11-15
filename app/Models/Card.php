<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Card extends Model
{
    protected $guarded = [];

    public function cardable(): MorphTo
    {
        return $this->morphTo();
    }
}
