<?php
print "Difite a Largura do terreno:" ;
$largura = trim(fgets(STDIN)) ;
print "Digite a comprimento do terreno" ;
$comp = trim(fgets(STDIN)) ;
print "Digite o valor do metro quadrado" ;
$mt = trim(fgets(STDIN)) ;

$area = $largura * $comp ;
$preco = $area * $mt ;
print "\n�rea do terreno = " . $area . " metros quadrados.\n" ;
print "\nPre�o do terreno = R$" . $preco . ",00" ;