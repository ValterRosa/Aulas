<?php
print "Digite o seu peso:" ;
$x = trim(fgets(STDIN)) ; // recebe o peso
print "Digite sua altura (Utilize Ponto no lugar da virgula):" ;
$y = trim(fgets(STDIN)) ; // recebe sua altura
$z = $x/($y * $y) ;
print "Seu IMC (Indice de Massa Corporal) é " . $z ; // print

