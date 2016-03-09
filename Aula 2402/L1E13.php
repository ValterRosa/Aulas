<?php
// converte celcius pra fahreinheit
print "Deseja entrar com temperatura em Celsius ou Fahrenheit (C/F)?";
$tipo = trim ( fgets ( STDIN ) );
if ($tipo != "C" && $tipo != "F" ) {
		print "Tipo de temperatura desconhecido." ;
} 
else{
	print "Digite a temperatura:";
	$temp = trim ( fgets ( STDIN ) );
	
if ($tipo == "F") {
	print "Equivalente em Celsius " . 5/9 * ($temp - 32) . "°C";
} 
else {
	print "Equivalente em Fahrenheit " . (($temp * (9/5)) + 32) . "°F"; // NAO TERMINEI
	
	}
}

