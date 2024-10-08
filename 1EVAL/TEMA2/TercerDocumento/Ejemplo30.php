<?php
$greeting= "good morning citizen";
$farewell= substr_replace($greeting, "bye", 5, 7);
$farewell= substr_replace($farewell, "kind", 9, 0);
$farewell= substr_replace($farewell, "", 8);
$farewell= substr_replace($farewell, "no it`s time to say", 0, 0);