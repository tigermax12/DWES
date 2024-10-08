
    <?php
    function doubler($value){
        // Multiplica por 2 el valor que entra el numero de veces que indice el valor al lado de las flechas (<<1)
        // Se desplaza en 1 el bit de memoria el numero de veces que indice el valor al lado de las flechas (<<1)
        return $value << 1;
    }
    echo doubler(4);
    ?>