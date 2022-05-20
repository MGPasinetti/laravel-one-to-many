<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserInfos extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'phone', 'address', 'avatar',
    ];

    public function user() {
        return $this->belongsTo('App\User');
    }
}
