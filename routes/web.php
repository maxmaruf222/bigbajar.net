<?php

use App\Http\Livewire\Public\Fallback;
use Illuminate\Support\Facades\Route;

//__welcome
Route::get('/', function(){return view('public.welcome');});

//__fallback page
Route::fallback(Fallback::class);






