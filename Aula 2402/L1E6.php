<?php
print "Digite dois numeros abaixo:" ;
print "\nPrimeiro numero : " ;
$n1 = Trim(fgets(STDIN)) ;
print "Segundo numero: " ;
$n2 = Trim(fgets(STDIN)) ;
if ($n1<$n2 ) {
	print "A ordem crescente é " . $n1 . ", " . $n2 . "." ;
}
else {
	print "A ordem crescente é " . $n2 . ", " . $n1 . "." ;
}