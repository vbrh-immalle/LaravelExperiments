<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        // uncomment to make birthdate 'mass assignable' (security)
        // also check https://laravel.com/docs/5.4/eloquent#mass-assignment
        'name', 'email', 'password', // 'birthdate' 
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    // A shorthand to return the 10 oldest users.
    // It is static and cannot be further queried upon.
    public static function oldest() {
        return User::orderBy('birthdate', 'desc')->take(10)->get();
    }

    // This is a shorthand which can be further queried upon.
    // You must call `->get()` yourself.
    // It is NOT static and starts with `scope`.
    // It is a so called "local query scope" : https://laravel.com/docs/5.4/eloquent#local-scopes
    public function scopeYoungest($qry, $amount = 10) {
        return User::orderBy('birthdate')->take($amount);
    }

    // this defines the MANY side of the 1-TO-MANY-relation between User and Message
    // Try it out with `App\User::find(1)->messages()`
    public function messages() {
        //return $this->hasMany(App\Message::class);
        return $this->hasMany('App\Message');
    }
}
