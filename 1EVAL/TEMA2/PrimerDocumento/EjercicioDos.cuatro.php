
<html>
    <head>
        <title>Activity 2 Lesson 3</title>
    </head>
    <body>
    <?php
    function selection($people, $option){
        $count= 0;
          echo ' <select name= '.$people.' >';
          while ($count!= $option){
        echo '<option value= '.$count.'>'.$count.'</option>';
            $count++;
        }

    }
    selection('Samuel', 15);
    ?>

    </body>
</html>