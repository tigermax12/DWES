<?php
function updateCounter(){
    $counter++;
}
function updateCounter1(){
    global $counter;
    $counter++;
}
function updateCounter2(){
    static $counter=0;
    $counter++;
    echo "Static counter is now {$counter}\n <br>";
}
function greet($name){
    echo "Hello, {$name}\n";
}
$counter= 10;
updateCounter();
echo $counter."<br>";
updateCounter1();
echo $counter."<br>"; 
updateCounter2();
echo "Global counter is now {$counter}\n <br>";
echo greet("Jannet")."<br>";
//FUNCIONES CON PARAMETROS POR VALOR Y POR REFERENCIA
function updateCounter5($cont){
    $cont++;
    echo "Paso por valor: ". $cont. "<br>";
}
$suma=6;
updateCounter5($suma);
echo "La suma es Paso por valor: ".$suma."<br>";

//PASO POR REFERENCIA
function updateCounter6(& $suma){
    $cont++;
    echo "Paso por referencia dentro de f: ".$cont."<br>";
}
$suma= 6;
$ref= & $suma;updateCounter6($ref);
echo "La suma es Paso por referencia: ".$suma."<br>";
echo "La ref es Paso por referencia: ".$suma."<br>";
?>