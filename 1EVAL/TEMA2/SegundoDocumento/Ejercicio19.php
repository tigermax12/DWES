<?php
$which= "paco";
switch ($which){
    case 'first':
        first();
        break;
    case 'second':
        second();
        break;
    case 'third':
        third();
        break;
}
if (function_exist($which)){
    $which(); // if $which is "first", the function first() is called, etc...

}
