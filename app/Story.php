<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    //

    public function comments()
    {
        return $this->belongsTo(Story::class);
    }

    public function celebrities()
    {
        return $this->hasMany(Story::class);
    }

    public function sources()
    {
        return $this->hasMany(Story::class);
    }
}