<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    //
    
    protected $fillable = ['name', 'ussd', 'website', 'other_websites', 'phone_numbers', 'email_addresses', 'countryTLD'];

    /**
     * Get the comments for the blog post.
     */
    public function bank_branches()
    {
        return $this->hasMany('App\BankBranch');
    }
}
