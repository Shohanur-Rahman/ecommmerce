<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MailAddress extends Model
{
    protected $guarded = [];

    public function mail()
    {
        return $this->belongsTo(Mail::class);
    }
}
