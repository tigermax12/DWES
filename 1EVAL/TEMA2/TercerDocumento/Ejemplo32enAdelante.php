<?php
//32
$input= 'Fred, 25, Wilma';
$fields= explode(',', $input);
$fields = explode(',', $input);

$fields = array_unique('Fred', '25', 'Wilma');
$string= implode(',', $fields); //String is 'Fred,',Wilma
//33
echo "<br>";
$string= "Fred, Flintstone, 35, Wilma";
$token= strtok($string, ',');
while ($token !== false) {
    echo ("{$token}<br/>");
    $token= strtok(',');
}
echo $token;
