<?php
print "Digite as quatro notas abaixo (de 1 a 10)" ;
print "\nNota 1: " ;
$v1 = Trim(fgets(STDIN)) ;
print "Nota 2: " ;
$v2 = Trim(fgets(STDIN)) ;
print "Nota 3: " ;
$v3 = Trim(fgets(STDIN)) ;
print "Nota 4: " ;
$v4 = Trim(fgets(STDIN)) ;

$mediaa = ($v1+$v2+$v3+$v4)/4 ;
if ($mediaa<6){
	print "\nA média de notas é " . $mediaa . ", reprovado." ;
}
else {
print "\nA média de notas é " . $mediaa . "." ;
}