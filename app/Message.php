<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    // this defines the 1 side of the 1-TO-MANY-relation between User and Message
    // Try it out with `App\Message::find(1)->user()`
    public function user() {
        return $this->belongsTo('App\User');
    }
}
