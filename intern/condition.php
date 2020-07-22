<?php
$t = date("H");

if ($t < "12") {
  echo "Have a good day!";
} else {
  echo "Have a good night!";
  echo "<br>" . "<br>";
}
?>
<?php 
$x=100;
$y=50;
if($x < "150"){
    echo "the number is " .$x;
}else{
    echo $y;
}
?>
<?php
$x = 50;
$y = 35;
$z = $x+$y;
echo "<p>The result is " . $z; 
echo ", and will give the following message:</p>";

if ($z < "10") {
  echo "Have a good morning!";
} elseif ($z < "100") {
  echo "Have a good day!";
} else {
  echo "Have a good night!";
}
?>
 