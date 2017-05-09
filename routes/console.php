<?php

use Illuminate\Foundation\Inspiring;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->describe('Display an inspiring quote');

Artisan::command('users', function() {
    DB::table('users')->orderBy('id')->chunk(1, function($users) {
        $this->info("next page :");
        foreach($users as $user) {
            $this->comment($user->name . " (" . $user->birthdate . ")" . ": " . $user->email);
        }
    });
})->describe('Show all users, their e-mail and birthday');