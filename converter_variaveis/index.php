<?php

$result = "2"; // é uma string

/*
$result = $result + 1; // é um interger 3
$result = $result + 3.5; // é um double 6.5
$result = 1 + 4.7; // é um double 5.7
*/

echo "Resultado exemplo um: " . $result . "<br>";
var_dump($result);
echo "<br>";
echo "<br>";

$result_dois = $result + 1;
echo "Resultado exemplo dois: " . $result_dois . "<br>";
var_dump($result_dois);
echo "<br>";
echo "<br>";

$result_tres = $result_dois + 3.5;
echo "Resultado exemplo três: " . $result_tres . "<br>";
var_dump($result_tres);
echo "<br>";
echo "<br>";

$result_quatro = 11;
echo "Resultado exemplo quatro: " . $result_quatro  . "<br>";
var_dump($result_quatro );
echo "<br>";
echo "<br>";

/*conversão explicita*/
$result_cinco = (double) $result_quatro;
echo "Resultado exemplo cinco: " . $result_quatro  . "<br>";
var_dump($result_cinco);
echo "<br>";
echo "<br>";

$result_seis = 7.9;
var_dump($result_seis);
echo "<br>";
echo "<br>";
$result_sete = (int) $result_seis;
echo "Resultado exemplo sete: " . $result_sete  . "<br>";
var_dump($result_sete);
echo "<br>";
echo "<br>";

