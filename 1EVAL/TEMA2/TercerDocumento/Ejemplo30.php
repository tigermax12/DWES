<?php
$greeting= "good morning citizen";
echo "</br>{$greeting}";
$farewell= substr_replace($greeting, "bye", 5, 7);
echo "</br>{$farewell}";
$farewell= substr_replace($farewell, "kind", 9, 0);
echo "</br>{$farewell}";
$farewell= substr_replace($farewell, "", 8);
echo "</br>{$farewell}";
$farewell= substr_replace($farewell, "no it`s time to say", 0, 0);
echo "</br>{$farewell}";
$farewell= substr_replace($farewell, "riddance", -3);
echo "</br>{$farewell}";
$farewell= substr_replace($farewell, "", -8, -5);
echo "</br>{$farewell}";