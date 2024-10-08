<?php
print substr($_POST['comments'], 0, 30);

print '...';
//substr
//Desde la componente2, 3 cosas
$rest= substr("abcdef", 2, 3);
print ("</br>{$rest}");
$rest= substr("abcdef", 2, 5);
print ("</br>{$rest}");
$rest= substr("abcdef", -1);
print ("</br> {$rest}");
$rest= substr("abcdef", -2);
print ("</br> {$rest}");
$rest= substr("abcdef", -3, 2);
print ("</br>{$rest}");