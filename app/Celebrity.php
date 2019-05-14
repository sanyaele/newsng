<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Celebrity extends Model
{
    //
    public function stories()
    {
        return $this->belongsTo(Celebrity::class);
    }

    public function categories()
    {
        return $this->hasMany(Celebrity::class);
    }
}
