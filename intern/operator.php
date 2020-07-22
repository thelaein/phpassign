<?php
$x = 50;  
$x += 150;
echo $x;
echo "<br>";
?>  
<?php
$x = 50;
$y = 30;
echo $x-$y;
echo "<br>";
?>  
<?php
$x = 100;  
$y = 100;

var_dump($x == $y); // returns true because values are equal
?>  
<?php
$x = 100;  
$y = 100;

var_dump($x === $y); // returns true because types are equal
?>  
<?php
$x = 100;  
$y = "100";

var_dump($x != $y); // returns false because values are equal
?>  
<?php
$x = 100;  
$y = 100;

var_dump($x !== $y); // returns false because types are  equal
?> 
<?php
$x = 10;
$y = 50;

var_dump($x > $y); //return false
?>  
<?php
$x = 10;
$y = 50;

var_dump($x < $y);
echo "<br>"; // returns true because $x is less than $y
?>
<?php
$x = 1;  
$y = 10;
echo ($x <=> $y); 
echo "<br>";

$x = 60;  
$y = 60;

echo ($x <=> $y); 
echo "<br>";

$x = 15;  
$y = 10;

echo ($x <=> $y);
echo "<br>"; 
?> 

<?php
$x = 15;  
echo ++$x;
echo "<br>";
?>  
<?php 
$x=60;
if ($x !== 50){
    echo "number is" . $x;
    echo "<br>";
}
?>
<?php
$txt1 = "Hello";
$txt2 = "Hey";
$txt1 .= $txt2;
echo $txt1;
?>  

