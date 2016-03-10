<?php
print "Digite o Valor da Base: " ;
$Bas= trim(fgets(STDIN)) ;
Print "Digite um Expoente: " ;
$Exp= trim(fgets(STDIN)) ;


while ($Exp<0){
	print "Digite uma valor posiivo para o Expoente: " ;
	$Exp= trim(fgets(STDIN)) ;
}
$Pot= pow($Bas,$Exp) ;
print "O valor de $Bas elevado a $Exp potencia é igual a $Pot." ;
