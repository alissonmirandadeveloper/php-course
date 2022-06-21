<?php

    echo "<h4>Conversão de tipo explicitamente</h4>";
    $number = 7.8;
    echo "Número float: " . $number;
    echo "<br>";
    var_dump($number);
    echo "<br>";
    

   $number_con  = (int)$number;
    echo "Número convertido para inteiro " .  $number_con;
    echo "<br>";
    var_dump( $number_con);