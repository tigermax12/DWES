<?php
//32
$input= 'Fred, 25, Wilma';
$fields= explode(',', $input);
$fields = array_unique($fields); // Elimina los duplicados del array
$string= implode(',', $fields); // String debería ser 'Fred, 25, Wilma'
echo $string; // Si deseas ver el resultado del implode
//33
echo "<br>";
$string= "Fred, Flintstone, 35, Wilma";
$token= strtok($string, ','); //Separa la cadena en tokens
while ($token !== false) {
    echo ("{$token}<br/>");
    $token= strtok(',');
}
//35
$bits = parse_url("https://me:secret@example.com/cgi-bin/board?user=fred");
print_r($bits);
echo "<br>";
//37
echo preg_match("/^cow/", "Dave was a cowhand");
echo preg_match("/^cow/", "cowabunga")."<br>";
//38
echo preg_match("/cow$/", "Dave was a cowhand");
echo preg_match("/cow$/", "Don´t have a cow")."<br>";

echo preg_match("/c.t/", "cat");
echo preg_match("/c.t/", "cut");
echo preg_match("/c.t/", "c t");
echo preg_match("/c.t/", "bat");
echo preg_match("/c.t/", "ct")."<br>";
//39
echo preg_match("/\$5\.00/", "Your bill is $5.00 exactly"); // returns true
echo preg_match("/$5.00/", "Your bill is $5.00 exactly")."<br>"; // returns false
//40
echo preg_match("/c[aeiou]t/", "I cut my hand");
echo preg_match("/c[aeiou]t/", "This crusty cat");
echo preg_match("/c[aeiou]t/", "What cart?");
echo preg_match("/c[aeiou]t/", "14ct gold")."<br>";

echo preg_match("/c[^aeiou]t/", "I cut my hand");
echo preg_match("/c[^aeiou]t/", "Reboot chthon");
echo preg_match("/c[^aeiou]t/", "14ct gold")."<br>";
//41
echo preg_match("/[0-9]%/", "we are 25% complete");
echo preg_match("/[0123456789]%/", "we are 25% complete");
echo preg_match("/[a-z]t/", "11th");
echo preg_match("/[a-z]t/", "cat");
echo preg_match("/[a-z]t/", "PIT");
echo preg_match("/[a-zA-Z]!/", "11!");
echo preg_match("/[a-zA-Z]!/", "stop!")."<br>";
//42
echo preg_match("/cat|dog/", "the cat rubbed my legs");
echo preg_match("/cat|dog/", "the dog rubbed my legs");
echo preg_match("/cat|dog/", "the rabbit rubbed my legs")."<br>";

echo preg_match("/^([a-z]|[0-9])/", "The quick brown fox");
echo preg_match("/^([a-z]|[0-9])/", "jumped over");
echo preg_match("/^([a-z]|[0-9])/", "10 lazy dogs")."<br>";
//43
echo preg_match("/ca+t/", "caaaaaaat");
echo preg_match("/ca+t/", "ct");
echo preg_match("/ca?t/", "caaaaaaat");
echo preg_match("/ca*t/", "ct")."<br>";
//44
echo preg_match("/[0-9]{3}-[0-9]{3}-[0-9]{4}/", "303-555-1212");
echo preg_match("/[0-9]{3}-[0-9]{3}-[0-9]{4}/", "64-9-555-1234")."<br>";