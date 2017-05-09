<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "Joske",
            'email' => "Joske@bla.be",
            'birthdate' => Carbon\Carbon::parse('2000-01-13'),
            'password' => bcrypt("joskepwd")
        ]);

        DB::table('users')->insert([
            'name' => "Jantje",
            'email' => "Jantje@bla.be",
            'birthdate' => Carbon\Carbon::parse('2001-01-13'),
            'password' => bcrypt("jantjepwd")
        ]);
    }
}
