<?php  
$x = 5985;
var_dump(is_integer($x));
echo "<br>";
$x = 59.85;
var_dump(is_int($x));
echo "<br>";
$x = 585;
var_dump(is_long($x));
echo "<br>" . "<br>";//integer
?>  

<?php 
$x = 10.365;
var_dump(is_float($x));
echo "<br>";
$x = 10.365;
var_dump(is_double($x));
echo "<br>";
$x = 365;
var_dump(is_double($x));
echo "<br>" . "<br>";//float
?>  
<?php
$x = 1.9e411;
var_dump($x); // Check if a numeric value is finite or infinite 

echo is_infinite(2) . "<br>";
echo is_infinite(log(0)) . "<br>";
echo is_infinite(2000);
echo is_finite(2) . "<br>";
echo is_finite(log(0)) . "<br>";
echo is_finite(2000) . "<br>";

?>  
<?php
$x = "59.85" + 100;
var_dump(is_numeric($x));

echo "<br>";

$x = "Hello";
var_dump(is_numeric($x));
echo "<br>";//numeric
?>  
<?php
// Cast float to int 
$x = 23465.768;
$int_cast = (int)$x;
echo $int_cast;
  
echo "<br>";

// Cast string to int
$x = "2345.768";
$int_cast = (int)$x;
echo $int_cast;
?>  
