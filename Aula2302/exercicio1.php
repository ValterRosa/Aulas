<?php 
// converte celcius pra fahreinheit
print "C ou F?";
$tipo = trim ( fgets ( STDIN ) );
print "Temperatura:";
$temp = trim ( fgets ( STDIN ) );
if ($tipo == "F") {
	print "Equivalente em Celsius " . 5 / 9 * ($temp - 32) . "°C";
} else {
	print "Equivalente em Fahrenheit " . (($temp * 1.8) + 32) . "°F"; // NAO TERMINEI
}