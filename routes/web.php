<?php

use App\Models\Project;
use App\Models\Client;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/one-to-one', function () {

    // eager loading
    $users = User::with('lamborghini')->get();
    
    foreach($users as $user) {
        echo('User data.');
        dump($user->toArray());

        echo('Lamborghini model that is in relationship with this user');
        dd($user->lamborghini->toArray());
    }
});

Route::get('/one-to-many', function() {
    
    // eager loading
    $users = User::with('shoes')->get();

    foreach($users as $user) {
        echo('User data');
        dump($user->toArray());

        echo('Shoes that is owned by each user');
        dd($user->shoes->toArray());
    }
});

Route::get('/one-to-many-though', function() {

    // Seeing clients and referrals from Bitcoin Model
    dump(Project::first()->toArray());
    dump(Project::first()->clients->toArray());
    dd(Project::first()->referrals->toArray());

    // Seeing referrals from Client Model
    // dump(Client::get()->toArray());
    // dump(Client::where('id', 3)->first()->referrals->toArray());
});