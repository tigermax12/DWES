<?php
function restaurant_check($meal, $tax, $tip): float { // La funcion devolvera una variable de tipo flaot
    $tax_amount = $meal * ($tax/100);
    $tip_amount = $meal * ($tip/100);
    $total_amount = $meal + $tax_amount + $tip_amount;
    return $total_amount;
}
echo "\n".restaurant_check(5,5,2);
