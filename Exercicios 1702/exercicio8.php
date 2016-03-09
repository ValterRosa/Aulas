<?php
print "Digite a medida do cateto 1: " ;
$c1 = trim(fgets(STDIN)) ;
print "Digite a medida do cateto 2: " ;
$c2 = trim(fgets(STDIN)) ;
$hip = sqrt(($c1*$c1)+($c2*$c2)) ;
$peri = $c1 + $c2 + $hip  ;
$area = ($c1*$c2)/2 ;

print "\nNeste triangulo ratangulo a hipotenusa mede " . $hip . " o perímetro é " . $peri . " e a área é " . $area . "." ;
