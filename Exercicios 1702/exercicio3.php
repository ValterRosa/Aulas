<?php
print "Digite 4 valores abaixo" ;
print "\nValor 1: " ;
$v1 = Trim(fgets(STDIN)) ;
print "Valor 2: " ;
$v2 = Trim(fgets(STDIN)) ;
print "Valor 3: " ;
$v3 = Trim(fgets(STDIN)) ;
print "Valor 4: " ;
$v4 = Trim(fgets(STDIN)) ;

$mediaa = ($v1+$v2+$v3+$v4)/4 ;

print "\nA média Aritimetica destes valores é " . $mediaa . "." ;