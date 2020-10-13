<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class MailAddress extends Model
{
    use SoftDeletes;

    protected $guarded = [];

    public function mail()
    {
        return $this->belongsTo(Mail::class)->withTrashed();
    }

    /*public static function sendMailCount($status)
    {
        $sendMailCount = MailAddress::where('status',$status)->count();
        return $sendMailCount;
    }*/

    public static function trashCount()
    {
        $trashCount = MailAddress::where(['status'=>1,'read_at'=>0])->onlyTrashed()->count();

        return $trashCount;
    }
}
