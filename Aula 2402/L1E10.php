<?php
print "Digite o valor do coeficiente A " ;
$A = trim(fgets(STDIN));
print "Digite o valor do coeficiente B " ;
$B = trim(fgets(STDIN));
print "Digite o valor do coeficiente C " ;
$C = trim(fgets(STDIN));

$delta = pow($B, 2) - 4*($A*$C) ;

if ($delta < 0) {
	print "Nуo existem raizes para esa equaчуo." ;
} 
else {
	$x1 = (-$B + sqrt($delta)) / (2*$A) ; 
	$x2 = (-$B - sqrt($delta)) / (2*$A) ;
	print "Raizes da equaчуo: " ;
	print "\nRaiz 1= " . $x1 ;
	print "\nRaiz 2= " . $x2 ;
}