<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/chi_siamo', function () {
    return view('chi_siamo');
});

Route::get('/servizi', function () {
    $servizi = [
        1 => [
            'nome_servizio' => 'Kebab',
            'costo_servizio' => 8,00,
            'descrizione_servizio' => 'Kebab con tutto',
        ],
        2 => [
            'nome_servizio' => 'Pizza',
            'costo_servizio' => 18,50,
            'descrizione_servizio' => 'Pizza con patatine',
        ],
        3 => [  
            'nome_servizio' => 'Pizzakebab',
            'costo_servizio' => 28,00,
            'descrizione_servizio' => 'Pizza kebab con tutto',
        ]
    ];
    return view('servizi',['array_servizi' => $servizi]);
});


Route::get('/servizi/{id}', function ($id) {
    $servizi = [
        1 => [
            'nome_servizio' => 'Kebab',
            'costo_servizio' => 8,00,
            'descrizione_servizio' => 'Kebab con tutto',
        ],
        2 => [
            'nome_servizio' => 'Pizza',
            'costo_servizio' => 18,50,
            'descrizione_servizio' => 'Pizza con patatine',
        ],
        3 => [  
            'nome_servizio' => 'Pizzakebab',
            'costo_servizio' => 28,00,
            'descrizione_servizio' => 'Pizza kebab con tutto',
        ]
    ];
    $servizio[0] = $servizi[$id];
    return view('servizi', ['array_servizi' => $servizio]);

    
});
