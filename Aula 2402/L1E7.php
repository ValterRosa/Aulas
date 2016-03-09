<?php
print "Digiteo valor de X:" ;
$X = Trim(fgets(STDIN)) ;
print "Digite o valor de A: " ;
$A = Trim(fgets(STDIN)) ;
print "Digite o valor de B: " ;
$B = Trim(fgets(STDIN)) ;

if ($X>=$A && $X<=$B) {
	print "O valor X(" . $X . ") está entre os valores A(" . $A . ") e B(" . $B . ")." ;
} 
else {
	if ($X>=$B && $X<=$A) {
		print "O valor X(" . $X . ") está entre os valores B(" . $B . ") e A(" . $A . ")." ;
	}
	else {
		print "O valor X(" . $X . ") não está entre os valores A(" . $A . ") e B(" . $B . ")." ;
	}
}