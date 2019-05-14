<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    public function celebrities()
    {
        return $this->belongsTo(Category::class);
    }
}
