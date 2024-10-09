<?php
//6
echo $addresses[0]= "spam@cyberpromo.net"."<br>";
echo $addresses[1]= "abuse@exmaple.com"."<br>";
echo $addresses[2]= "root@example.com"."<br>";

echo $price['gasket']= 15.29."<br>";
echo $price['wheel']= 75.25."<br>";
echo $price['tire']= 50.00."<br>";

print_r( $addresses= array("spam@cyberpromo.net", "abuse@exmaple.com", "root@example.com"));
print_r( $price= array(
     'gasket'=> 15.29,
     'wheel'=> 75.25,
     'tire'=> 50.00
));
echo "<br>";
print_r( $days= ['gasket'=> 15.29, 'wheel'=> 75.25, 'tire'=> 50.00]);
echo "<br>";
//7
//Array vacio
print_r($addresses= array());
echo "<br>";
//Lista de valores en un array
print_r($days= array(1=>"Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun"));
echo "<br>";
// 2 is Tue, 3 is Wed, etc
print_r($whoops= array('Fri'=> "Black", "Brown", "Green"));
echo "<br>";
print_r($whoops= array('Fri'=> "Black", 0=> "Brown", 1=> "Green"));
echo "<br>";
//8
//Asignando valores al final de un array
print_r($family= array("Fred", "Wilma"));
echo "<br>";
print_r($family[]= "Pebbles"); //$family[2] is "Pebbles"
echo "<br>";
print_r($person= array('name' => 'Fred'));
echo "<br>";
print_r($person[]= "Wilma"); //person[0] is now Wilma
echo "<br>";
// range() crea un array de enteros consecutivos incluyendo los valores dados
print_r($numbers= range(2, 5)); //$numbers= array
echo "<br>";
print_r($letters= range('A', 'Z')); //$letters holds the alphabet
echo "<br>";
print_r($reversedNumbers= range(5, 2)); // Es un array que contiene 5, 4, 3, 2
echo "<br>";
//9
print_r($family= array("Fred", "Wilma", "Pebbles"));
echo "<br>";
print_r($size= count($family)); // Cuenta el numero de valores dentro de un array

