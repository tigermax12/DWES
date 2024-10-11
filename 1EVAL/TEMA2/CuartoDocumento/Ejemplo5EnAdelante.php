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
echo "<br>";
//16
$subjects= array("physics", "chem", "math", "bio", "cs", "drama", "classics");
$removed= array_splice($subjects, 2, 3);

print_r($removed);
print_r($subjects);
echo "<br>";
$removed= array_splice($subjects, 2);
print_r($removed);
print_r($subjects);
echo "<br>";
//17
print_r($subjects= array("physics", "chem", "math", "bio", "cs", "drama", "classics"));
echo "<br>";
$new= array("law", "business", "IS");
array_splice($subjects, 4, 3, $new);
print_r($subjects);
echo "<br>";
print_r($subjects= array("physics", "chem", "math"));
$new= array("law", "business");
array_splice($subjects, 2, 0, $new);
print_r($subjects);
echo "<br>";
//18
$person= array('name'=> "Fred", 'age' => 35, 'wife' => "Betty");
extract($person);
echo "Name: {$name}, Age: {$age}, Wife: {$wife}<br>";
//19
$color= "indigo";
$shape= "curvy";
$floppy= "none";
print_r($a= compact('color', 'shape', 'floppy'));
//20
$addresses= array("spam@cyberpromo.net", "abuse@example.com");
foreach ($addresses as $value) {
    echo "Processing {$value}<br>";
}
$person= array('name'=> "Fred", 'age' => 35, 'wife' => "Wilma");
foreach ($person as $key => $value) {
    echo "Fred´s {$key} is {$value}<br>";
}
//21
/*A.2.12. Declara un array llamado $meal con estas key-values:
breakfastcoffee,
snacksandwich,
lunchpizza,
dinneromellete.Después crea un nuevo método llamado print_table, y haz uso de*/
/*foreach loop para imprimir el array y sus valores en una pretty-tabla.*/
$meal= array('breakfast'=> "coffee", 'snack'=> "sandwich", 'lunch'=> "pizza", 'dinner'=> "omellete");
foreach ($meal as $key => $value) {
    echo "My meal for {$key} is {$value}<br>";
}
//22
$dinner= array('Sweet Corn and Asparagus',
    'Lemon Chicken',
    'Braised Bamboo Fungus');
for ($i= 0, $num_dishes= count($dinner); $i < $num_dishes; $i++) {
    print "Dish number $i is $dinner[$i]<br>";
}
//23
$meals= array('Walnut Bun'=>1,
    'Cashew Nuts and White Mushroom'=>4.95,
    'Dried Mulberries'=>3.00,
    'Eggplant with Chili Sauce'=>6.50,
    'Shrimp Puffs'=>0);
$books= array("The Eater´s Guide to Chinese Characters",
    'How to Cook and Eat in Chinese');
if(in_array(3, $meals)){
    print 'There is a $3 item';
}
if(in_array('How to Cook and Eat in Chinese', $books)){
    print 'We have How to Cook and Eat in Chinese';
}
if(in_array("the eater´s guide to chinese characters", $books)){
    print "We have the Eater´s Guide to Chinese Chracters";
}
echo "<br>";
/*A.2.13. array_search() is similar to in_array(), but what is the
difference?*/
/*in_array(): Solo verifica si un valor está presente en un array
y devuelve un valor booleano (true o false).*/
/*array_search(): Busca un valor en un array y devuelve la clave (índice) de
la primera ocurrencia del valor. Si no encuentra el valor, devuelve false.*/
//24
$names= array("Cath", "Angela", "Brad", "Mira");
sort($names);
echo "<br>";
//25
$logins= array(
    'njt'=> 415,
    'kt'=> 492,
    'rl'=> 652,
    'jht'=> 441,
    'jj'=> 441,
    'wt'=> 402,
    'hit'=> 309
);
arsort($logins);
$numPrinted= 0;
echo "<table>\n";
foreach ($logins as $user => $time) {
    echo("<tr><td>$user</td><td>$time</td></tr>\n");
    if (++$numPrinted === 3) {
        break;
    }
}
echo "</table>\n";
echo "<br>";
//26
$weekdays= array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday");
shuffle($weekdays);
echo "<br>";
print_r($weekdays);
echo "<br>";
//27
$sum= array_sum($weekdays);
$merged= array_merge(array(), $sum);
$diff= array_diff($weekdays, $merged);
//28
/*A.2.14. What do you think this code is trying to do?*/
function arrayUnion($a, $b){
    $union= array_merge($a, $b);
    $union= array_unique($union);
    return $union;
}
$first= array(1, "two", 3);
$second= array("two", "three", "four");
$union= arrayUnion($first, $second);
print_r($union);
//Este codigo intenta unir dos arrays y eliminar lso valores duplicados
