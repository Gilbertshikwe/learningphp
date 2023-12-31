<?php
// outputting my first php code
echo "Hello World! 
My names are Gilbert Shikwe<br>"
?>
<?php
// declaring variables
$name = "George Gilbert";
$age = 29;
echo "His name is $name and his age is $age.<br>";
$x = 67;
$y = 5;
echo $x * $y ;
echo "<br>";
// to get the data type
var_dump($name)
?>
<?php
//variable scope
$Num = 45;
echo "<br>";
function MyFunction() {
    $Num = 45;
    echo "The number here is: $Num";
}
MyFunction();
echo "<br>";
$cars = ["BMW","Mercedes","Lamborghini"];
var_dump($cars);
?>
