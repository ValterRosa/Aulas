<?php
print "Digite o dia: " ;
$dia =trim(fgets(STDIN));
print "Digite o Mes: " ;
$mes =trim(fgets(STDIN));
if ($mes==1){
	print "Este � o " . $dia . "� dia do ano." ;
}
elseif ($mes==2){
	print "Este � o " . (31+ $dia) . "� dia do ano." ;
}
elseif ($mes==3){
	print "Este � o " . (31+28+ $dia) . "� dia do ano." ;
}
elseif ($mes==4){
	print "Este � o " . (31+28+31+ $dia) . "� dia do ano." ;
}
elseif ($mes==5){
	print "Este � o " . (31+28+31+30+ $dia) . "� dia do ano." ;
}
elseif ($mes==6){
	print "Este � o " . (31+28+31+30+31+ $dia) . "� dia do ano." ;
}
elseif ($mes==7){
	print "Este � o " . (31+28+31+30+31+30+ $dia) . "� dia do ano." ;
}
elseif ($mes==8){
	print "Este � o " . (31+28+31+30+31+30+31+ $dia) . "� dia do ano." ;
}
elseif ($mes==9){
	print "Este � o " . (31+28+31+30+31+30+31+31+ $dia) . "� dia do ano." ;
}
elseif ($mes==10){
	print "Este � o " . (31+28+31+30+31+30+31+31+30+ $dia) . "� dia do ano." ;
}
elseif ($mes==11){
	print "Este � o " . (31+28+31+30+31+30+31+31+30+31+ $dia) . "� dia do ano." ;
}
elseif ($mes==12){
	print "Este � o " . (31+28+31+30+31+30+31+31+30+31+30+ $dia) . "� dia do ano." ;
}



