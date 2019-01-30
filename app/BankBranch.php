<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BankBranch extends Model
{
    //
    protected $fillable = ['Bank', 'Branch', 'lon_lat', 'ATM'];

    public function banks()
    {
        return $this->belongsTo('App\Bank');
    }
}
