<?php

use Illuminate\Database\Seeder;

class UserstableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create ([
            'name' => 'admin',
            'password' => bcrypt('admin'),
            'email' => 'admin@stadibox.dev',
            'admin' => 1 
        ]);
    }
}
