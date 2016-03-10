<?php
print "Digite um numero REAL: " ;
$num= trim(fgets(STDIN));

while($num<3000){
	print "\n$num" ;
	$num=($num*2);
}