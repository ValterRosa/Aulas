<?php
print "Digite o 3 valores e verificaremos se eles podem compor um triangulo." ;
print "\nDigite o valor do Lado 1:" ;
$L1 = Trim(fgets(STDIN)) ;
print "Digite o valor do lado 2: " ;
$L2 = Trim(fgets(STDIN)) ;
print "Digite o valor do lado 3: " ;
$L3 = Trim(fgets(STDIN)) ;


if  ((($L1+$L3)>$L2 && ($L1+$L2)>$L3) && (($L3+$L2)>$L1)){
	print"� possivel compor um triangulo com estas medidas." ;
}
else {
	print "N�o � possivel compor um triangulo com as medidas." ;
}
