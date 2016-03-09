<?php
print "Digite o valor de X:" ;
$X = Trim(fgets(STDIN)) ;
if ($X==0) {
	print "O valor X(" . $X . ") é nulo." ;
}
else { 
	if ($X>0) {
		print "O valor X(" . $X . ") é positivo." ;
	}
	else {
		print "O valor X(" . $X . ") é negativo." ;
	}
	
}