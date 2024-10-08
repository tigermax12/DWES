


<html>
    <head>
        <title>Activity 2 Lesson 3</title>
    </head>
    <body>
    <?php
    $ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels",
        "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava",
        "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin",
        "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm",
        "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague",
        "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" =>
            "Vienna", "Poland"=>"Warsaw") ;
    function print2($ceu){
        foreach ($ceu as $country => $capital){
        echo '<capital>La capital de '.$country.' is '.$capital.'</capital> </br>';
        };
    }

    function print3($ceu){
        echo '<table>';
    foreach ($ceu as $country => $capital){
        echo '<td>'.$country.'</td><td>'.$capital.'</td><tr></tr>';
        }
    echo '</table>';
    }
    print2($ceu);
    print3($ceu);
    ?>

    </body>
</html>