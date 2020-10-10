<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mail extends Model
{
    protected $guarded = [];

    public function mailAddresses()
    {
        return $this->hasMany(MailAddress::class);
    }
}
