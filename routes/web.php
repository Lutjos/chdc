<?php

use Illuminate\Support\Facades\Route;
// 
Route::get('/', \App\Livewire\Home\Home::class);


Route::get('/dashboard',\App\Livewire\Dashboard::class);

Route::get('/adminstration/assigne-roles',\App\Livewire\Admin\AssignRole::class);





Route::middleware([
    'auth:sanctum',
    'role:admin',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
   
    
});
