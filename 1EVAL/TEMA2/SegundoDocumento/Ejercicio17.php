<?php
// Da igual el numero de argumentos solo coge los dos primeros, y el segundo valor puede ser null
function takesTwo($a, $b=null){
    if (isset($a)){
        echo " a is set\n";
    }
    if (isset($b)){
        echo " a is set\n";
    }
}
echo "With two arguments:\n";
takesTwo(1, 2);
echo "With one arguments:\n";
takesTwo(1);
