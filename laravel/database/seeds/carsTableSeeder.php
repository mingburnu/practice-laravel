<?php

use Illuminate\Database\Seeder;

class carsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 100; $i++) { DB::table('cars')->insert([ 'price' => random_int(1, 100),

            'make' => str_random(20),

            'model' => str_random(100),

            'produced_on' => \Carbon\Carbon::now()->toDateTimeString(),

            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),

            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()

        ]);
        }

        DB::table('users')->insert([
            'name' => "root",

            'password'=> Hash::make('Passw0rd'),

            'email' => "root@localhost.com",

            'remember_token' => str_random(100),

            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),

            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()

        ]);
    }
}
