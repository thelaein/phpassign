<?php
function myTest() {
  static $x = 0;
  echo $x;
  $x++;
}
echo "using static" . "<br>";
myTest();
echo "<br>";
myTest();
echo "<br>";
myTest();
echo "<br>";
myTest();
?> 

