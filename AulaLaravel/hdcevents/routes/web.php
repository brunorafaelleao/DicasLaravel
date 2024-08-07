<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $nome = "Bruno";
    $idade = 34;
    $arr = [1,2,3,4,5];
    return view('welcome',
        [
            'nome' => $nome,
        'idade' => $idade,
        'arr' => $arr
        ]);
});

Route::get('/contact', function(){
    return view('contact');
});