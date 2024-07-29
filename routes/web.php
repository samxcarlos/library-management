<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function (){
    $this->comment(Inspiring::qoute());
})->purpose('Display an inspiring qoute')->hourly();
//Route::get('/', function () {
    //return view('welcome');