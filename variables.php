<?php

// Variable tipo numero 
$numero = 10;

echo 'Esto es un número: ' . $numero;
echo "<br><br>";

// Variable tipo texto
$texto = "Esto es una cadena de texto";

echo 'Mi cadena: ' . $texto;
echo "<br><br>";

// Variable de tipo booleana
$booleana = true;
// si es true muestra 1, si es falso no muestra nada
echo "Esto es una variable booleana: " . $booleana;
echo "<br><br>";


// Variable de tipo arreglo
$arreglo = array("Alejando", "Maria");
echo "Segundo nombre del arreglo: " . $arreglo[1];
echo "<br><br>";

// Variable tipo arreglo con propiedades
$colores = array("color1"=>"rojo", "color2"=>"azul");

echo $colores["color2"];
echo "<br><br>";

// variable de tipo objecto
$objeto = (object)["mueble1"=>"armario", "mueble2" => "escritorio"];

echo $objeto->mueble1
?>