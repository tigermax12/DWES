<?php
function countdown()
{
    while ($top > 0){
        print "$top..";
        $top--;
    }

}
$counter= 5;
countdown($counter);
print "now counter is $counter";