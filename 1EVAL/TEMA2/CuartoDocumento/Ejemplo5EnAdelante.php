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
//Rellenando un array
print_r($scores= array(5, 10));
print_r($padded= array_pad($scores, 5, 0));
print_r($padded2= array_pad($scores, -5, 0));
echo "<br>";
//10
// FIRST EXERCISE WITH ARRAYS
$a= $arrayName= array(8, 9);
foreach ($a as $value) {
    echo ($value."<br>");
}
//11
$row0= array(1, 2, 3);
$row1= array(4, 5, 6);
$row2= array(7, 8, 9);
$multi= array($row0, $row1, $row2);
$value= $multi[2][0]; //Row 2, column 0. $value= 7
echo("The value at row 2, column 0 is {$value}<br>");
//12
$person= array("Fred", 35, "Betty");
list($name, $age, $wife)= $person;
// $name is "Fred", $age is 35, $wife is "Betty"
echo "<br>";
//13
print_r($people= array("Tom", "Dick", "Harriet", "Brenda", "Jo"));
$middle= array_slice($people, 2, 2); // $middle is array("Harriet", "Brenda")
echo "<br>";
// Exercise 2.11
print_r("Ejercicio 11");
print_r($second= array_slice($people, 2));
print_r($third= array_slice($people, 3));
echo "<br>";
//14
print_r($person= array('name'=> "Fred", 'age' => 35, 'wife' => "Wilma"));
print_r($keys= array_keys($person)); //$Keys is array("name", "age", "wife")
print_r($values= array_values($person));
echo "<br>";
//15

$person['age'] = 0;
if (array_key_exists('age', $person)) {
    echo "exist!";
}