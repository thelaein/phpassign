<?php
define("INTRO", "Welcome to W3Schools.com!");
echo INTRO;
echo "<br>"; //case-sensitive
?> 
<?php
define("INTRO", "Welcome...!",true);
echo intro;
echo "<br>"; //case-insensitive
?> 
<?php
define("phones",["samsung","iph","mi","oppo"]);
echo phones[2]; 
?>