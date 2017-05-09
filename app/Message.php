<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    // this defines the 1 side of the 1-TO-MANY-relation between User and Message
    public function user() {
        return $this->belongsTo('App\User');
    }
}
