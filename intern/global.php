<?php 
$x=10;
$y=15;
function mytest(){
    global $x, $y;
    $x = $x + $y ;
}
mytest();
    echo  $x . "<br>" . "<br>"; //using global
?>

