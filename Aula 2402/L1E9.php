<?php
print "Digite o valor de X:" ;
$X = Trim(fgets(STDIN)) ;
if ($X==0) {
	print "O valor X(" . $X . ") � nulo." ;
}
else { 
	if ($X>0) {
		print "O valor X(" . $X . ") � positivo." ;
	}
	else {
		print "O valor X(" . $X . ") � negativo." ;
	}
	
}