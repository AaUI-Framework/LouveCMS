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


//COMMAND FOR CREATE USER
Artisan::command('create:user', function () {

    $name = $this->ask('Name?');
    $email = $this->ask('Email?');
    $pwd = $this->ask('Password?');
    // $pwd = $this->secret('Password?'); // or use secret() to hide the password being inputted
    \DB::table('users')->insert([
        'name' => $name,
        'email' => $email,
        'password' => bcrypt($pwd),
        'created_at' => date_create()->format('Y-m-d H:i:s'),
        'updated_at' => date_create()->format('Y-m-d H:i:s'),
    ]);
    $this->info('Account created for '.$name);
});

//COMMAND FOR CREATE ADMIN
Artisan::command('create:admin', function () {

    $name = $this->ask('Name?');
    $email = $this->ask('Email?');
    $pwd = $this->ask('Password?');
    // $pwd = $this->secret('Password?'); // or use secret() to hide the password being inputted
    \DB::table('admins')->insert([
        'name' => $name,
        'email' => $email,
        'password' => bcrypt($pwd),
        'created_at' => date_create()->format('Y-m-d H:i:s'),
        'updated_at' => date_create()->format('Y-m-d H:i:s'),
    ]);
    $this->info('Account created for '.$name);
});

