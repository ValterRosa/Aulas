<?php
print "Digite o 3 valores e verificaremos se eles podem compor um triangulo, caso seja possivel mostrarei sua àrea." ;
print "\nDigite o valor do Lado 1:" ;
$L1 = Trim(fgets(STDIN)) ;
print "Digite o valor do lado 2: " ;
$L2 = Trim(fgets(STDIN)) ;
print "Digite o valor do lado 3: " ;
$L3 = Trim(fgets(STDIN)) ;


if  ((($L1+$L3)>$L2 && ($L1+$L2)>$L3) && (($L3+$L2)>$L1)){
	$T = ($L1+$L2+$L3)/2 ;
	$area = sqrt($T*($T-$L1)*($T-$L2)*($T-$L3)) ;
	print"É possivel compor um triangulo com estas medidas e sua area é " . $area . "." ;
}
else {
	print "Não é possivel compor um triangulo com as medidas." ;
}
