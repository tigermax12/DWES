<?php
$cadena = "Hola mundo, hola mundo!";
$posicion = strpos($cadena, "mundo");
// Retorna 5, porque "mundo" aparece por primera vez en la posición 5.

$cadena = "Hola mundo, hola mundo!";
$posicion = strrpos($cadena, "mundo");
// Retorna 17, porque "mundo" aparece por última vez en la posición 17.

$cadena = "Hola mundo, hola universo!";
$resultado = strstr($cadena, "mundo");
// Retorna "mundo, hola universo!"

$cadena = "Hola mundo, hola universo!";
$resultado = strchr($cadena, "universo");
// Retorna "universo!"

$cadena = "123abc";
$longitud = strspn($cadena, "1234567890");
// Retorna 3, porque "123" es la secuencia más larga de números antes de que aparezca una letra.

$cadena = "abc123";
$longitud = strcspn($cadena, "1234567890");
// Retorna 3, porque los primeros tres caracteres no están en el grupo de números.