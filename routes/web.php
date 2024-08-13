<?php

use Illuminate\Support\Facades\Route;
//
Route::get('/', \App\Livewire\Home\Home::class);



Route::get('/dashboard',\App\Livewire\Dashboard::class);

Route::get('/adminstration/utilisateurs/nouveau', \App\Livewire\Admin\FormAssignRole::class)
->name('user.new');
Route::get('/adminstration/utilisateurs/role', \App\Livewire\Admin\RoleListe::class)
->name('user.roles');

Route::get('/adminstration/utilisateurs',\App\Livewire\Admin\AssignRole::class)->name('user.list');




Route::middleware([
    'auth:sanctum',
    'role:Agent',
    config('jetstream.auth_session'),
])->group( function(){

    Route::prefix('agent')->group(function(){

        Route::get('/dashboard',\App\Livewire\Agent\DashboardAgent::class);

    });
});

Route::middleware([
    'auth:sanctum',
    'role:admin',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {


});
