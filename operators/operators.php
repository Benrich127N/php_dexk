<?php
$name = "prince";
$food = "pizza";
$email = "fake@gmail.com";
$age = 21;
$users = 2;
$quantity = 3;
$gpa = 2.5;
$price = 4.99;
$tax_rate = 5.1;
$employed = true;
$online = true;
$total = null;


echo "Hello {$name} <br>";
echo "You like {$food} <br>";
echo "Your email is {$email} <br>";
echo "You are {$age} years old <br>" ;
echo "there are  {$users} users online <br>";
echo "would you like to buy {$quantity} items ? <br>";
echo "your gpa is {$gpa} <br>";
echo "your {$food} is \${$price}<br>";
echo "The sales tax rate is: {$tax_rate} <br>";
echo "you are {$online}<br>";
echo "you are employed {$employed} <br>";
echo "you have ordered {$quantity} X {$food}s <br>";
$total = $quantity * $price;
echo "Your total is: {$total}";

?>

