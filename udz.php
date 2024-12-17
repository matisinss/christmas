<?php

$x=10*9*8*7*6*5*4*3*2*1;
$y=1*2*3*4*5*6*7*8*9*10;
$faktorials=1;
for($x=1; $x<=10; $x=$x+1){
$faktorials = $faktorials * $x;
}
echo $faktorials;
?>