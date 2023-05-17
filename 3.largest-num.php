<?php
$x = 10;
$y = 30;
$z = 20;
if($x > $y && $x > $z){
    echo "largest number is : ". $x;
}
elseif($y > $x && $y > $z){
    echo "largest number is : ". $y;
}
else{
    echo "largest number is : ". $z;
}
?>