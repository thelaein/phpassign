<?php
function Name($name, $year) {
  echo "My name is $name . Born in $year <br>";
}

Name("Mg","1975");
Name("Su","1978");
Name("Mya","1983");
?>
<?php
function number(int $a,int $b){
  return $a+$b;
}
echo number(10,"5");
?>
<?php
function addNumbers(int $a, int $b) {
  return $a + $b;
}
echo addNumbers(5, "5 days"); 
?>