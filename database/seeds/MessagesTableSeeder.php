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

        // create a random amount of messages (between 0 and 3) for all other fake users
        $userids = App\User::pluck('id')->diff([1,2]); // exclude id's 1 and 2

        $userids->each(function ($u) {

            $n = random_int(0, 3);

            // override the user_id since our App\Message-faker-factory creates new users otherwise
            factory(App\Message::class, $n)->create([
                'user_id' => $u
            ]);

        });

    }
}
