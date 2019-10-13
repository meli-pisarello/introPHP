<?php
// funciones sin parámetros
function bienvenido() {
	echo "Bienvenido al curso de php";
	echo "<br><br>";
}

// llamar una función sin parámetros
bienvenido();

// funciones con parámetros
function saludar($hola) {
	echo $hola;
	echo "<br><br>";
}

// llamar una función con parámetros
saludar("Hola a todos");

// funciones con retorno
function retorno($retornar) {
	return $retornar;
}

// llamar una función con retorno de valor
echo retorno("Retornando la función");

?>