<?php
print "Digite um numero inteiro:" ;
$numero = Trim(fgets(STDIN)) ;
if (($numero%2)!=0 ){
	print "O numero " . $numero . " � impar." ;
} 
else {
	print "O numero " . $numero . " � par." ;
}
	
