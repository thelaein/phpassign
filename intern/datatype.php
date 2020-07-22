<?php 
$x = "Hello world!";
$y = 'Hello world!';

echo $x . "<br>";//string
print $y . "<br>" . "<br>";
?>
<?php
$x =5000;
var_dump($x); //integer
?>
<?php  
$x = 10.365;
var_dump($x); //float
?>  
<?php  
$cars = array("Honda","BMW","Toyota");
var_dump($cars); //array
?>  

<?php
class Cars{
  function Cars() {
    $this->model = "VW";
  }
}
// create an object
$herbie = new Cars();

// show object properties
echo $herbie->model;
?>

<?php
class phone{
    function phone(){
        $this->model ="Android";
    }
}
$obj=new phone();
echo $obj->model; //object
?>

<?php
$x = "Hello world!";
$x = null;
var_dump($x); //null
?>
