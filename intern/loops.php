<?php
$x=2;
while($x<=10){
    if($x==6){
        $x++;
        continue;
    }
    echo "the number is $x <br>";
    $x+=3;
}
echo "<br>";
 ?>

 <?php 
$x = 60;
do {
  echo "The number is: $x <br>";
  $x+=15;
} while ($x <= 100);
echo "<br>";
?>

<?php  
for ($x = 0; $x <= 100; $x++) {
    if($x ==7){
    break;
    }
  echo "The number is: $x <br>";
}
?> 
 
<?php
$age = array("Peter"=>"35", "Ben"=>"37", "John"=>"43");

foreach($age as $x => $val) {
  echo "$x = $val<br>";
}
?>