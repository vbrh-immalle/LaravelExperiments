<?php

use Illuminate\Database\Seeder;

class MessagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('messages')->insert([
            'user_id' => 1,
            'content' => "Hallo, ik ben Joske."
        ]);

        DB::table('messages')->insert([
            'user_id' => 1,
            'content' => "Ik ben Joske en dit is mijn tweede berichtje."
        ]);

        DB::table('messages')->insert([
            'user_id' => 2,
            'content' => "En ik ben Jantje en dit is mijn eerste berichtje."
        ]);
    }
}
