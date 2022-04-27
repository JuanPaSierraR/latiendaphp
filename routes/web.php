<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//primera ruta
//clase route->metodo get
Route::get('hola' , function() {
    echo "Hola le dijo la araña a la mosca";
});

route::get('paises', function(){

    $paises = [
        "Colombia" => [
            "cap" => "Bogota",
            "mon" => "Peso",
            "pob" => 51.6,
            "ciudades" => [
                "Medellin",
                "Cali",
                "Barranquilla"
            ]
            ],
            "Ecuador" => [
                "cap" => "Quito",
                "mon" => "Dolar",
                "pob" => 20,
                "ciudades" => [
                    "Cuenca"
                ]
                ],

            "Argentina" => [
                "cap" => "Buenos aires",
                "mon" => "Peso Argentino",
                "pob" => 45.3,
                "ciudades" => [
                    "Rosario",
                    "Mendoza"
                ]
                ],
                "Venezuela" => [
                    "cap" => "Caracas",
                    "mon" => "Bolivar",
                    "pob" => 28.4,
                    "ciudades" => [
                        "Maracaibo",
                        "Valencia",
                        "Ciudad Bolivar"
                    ]
                    ],
                    "Brasil" => [
                        "cap" => "Brasilia",
                        "mon" => "Real brasileño",
                        "pob" => 212.6,
                        "ciudades" => [
                            "Rio de janeiro",
                            "Sao paulo",
                            "Porto Alegre",
                            "Fortaleza",
                            "Belo Horizonte"
                        ]
                        ]

   ];
   return view('paises')
   ->with("paises", $paises);

});
