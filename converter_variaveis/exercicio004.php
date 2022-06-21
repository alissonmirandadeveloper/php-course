<?php

    echo "<h4>Conversão de variáveis explicitamente</h4>";
    $number = 15;
    echo "Número inteiro: " . $number;
    echo "<br>";
    var_dump($number);
    echo "<br>";
    
   $number_double = (double) $number;
   echo "Número double: " . $number_double;
   echo "<br>";
   var_dump( $number_double);
   echo "<br>";
