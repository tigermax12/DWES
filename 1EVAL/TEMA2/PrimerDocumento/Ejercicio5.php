<?php
$str= "2 years";
$str_int= (int)$str;
$var= 20 + $str_int;
print_r($var);

var_dump($var);

$str1= " years";
$str1_int= (int)$str1;
$var1= 20 + $str1_int;

var_dump($var1);
echo "<br>";

define('IVA', 21);
echo IVA;
//arrays
$a= array(1, 2, array("a", "b", "c"));
var_dump($a);// con tipos
print_r($a); // sin tipos

echo "<br>";

$frase= "hola";
$frase1= (int)$frase;
$frase2= (bool)$frase;
var_dump($frase, $frase1, $frase2);

?>