<?php
print "Digite a largura do retangulo: " ;
$largura = trim(fgets(STDIN)) ;
print "digite o comprimento do retangulo: " ;
$comp = trim(fgets(STDIN)) ;
$peri = (2*$largura)+(2*$comp) ;
$area = $largura * $comp ;

print "\nO perimetro do retangulo é : " . $peri . " metros e a sua area é de " . $area . " metros quadrados" ;
