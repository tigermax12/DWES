<?php
$string = strrev("Un String");
echo "</br>{$string}";
$repeated= str_repeat("Mas String ", 4);
echo "</br>$repeated";
$padded= str_pad("Un string", 5, " ", STR_PAD_LEFT);
echo "</br>$padded";