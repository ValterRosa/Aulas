<?php
print "Digite o valor A " ;
$A = trim(fgets(STDIN));
print "Digite o valor B " ;
$B = trim(fgets(STDIN));
print "Digite o valor C " ;
$C = trim(fgets(STDIN));

if ($A<$B && $A<$C) {
	print "Menor Valor = " . $A . "." ;
}
else {
	if ($B<$C) {
		print "Menor Valor = " . $B . "." ;
	}
	else {
		print "Menor valor = " . $C . "." ;
	}
}