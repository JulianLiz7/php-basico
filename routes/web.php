<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mi-nombre', function () {
    return view('Julian Lizcano');
});

Route::get('/php-basico', function () {

echo "<h1 style='color:red'>  Aprendiendo PHP </h1>";

    $name = 'Julian';
    $height = 1.78;
    $islogin = true;
    $age = 18;

    echo "<h4> ".$name." </h4>";
    echo "<p> ".$name." </p>";

    echo "<br><br><br> ***********ESTRUCTURAS DE CONTROL***********<br><br>";

    $message = "soy $name, tengo $age años". validateAge($age);

    $message .= $islogin ? " y estoy logueado" : " y no estoy logueado";

    echo $message;

        echo "<br><br><br> ***********ESTRUCTURAS DE DATOS***********<br><br>";

        $pc = [
            "name" => "PC Gamer core 9",
            "price" => 6000,
            "marca" => "LENOVO",
        ];

        $teclado = [
            "name" => "Teclado Gamer",
            "price" => 200,
            "marca" => "ASUS",
        ];

        $listaProductos = [
            $pc,
            $teclado];

        foreach ($listaProductos as $item) {
            echo $item["name"]. "<br>";
        }
    

});

function validateAge($age) {
    if ($age >= 18) {
        return" soy mayor de edad";
    } else {
        return " soy menor de edad";
    }
}
