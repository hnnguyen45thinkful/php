<?php 
// $x = 5;
// echo $x;
// echo "Any String"; 
// $word1 = "Hello";
// $word2 = "World";
// echo 'I just want to say '.$word1.' '.$word2; 
// $num1 = 3;
// $num2 = 2;
// echo $num1 + $num2;
// $cars = array('Honda', 'Toyota', 'Ford');
// echo $cars[0];
// echo 'I drive a ' .$cars[1]; 
// 
// $cars = array('Honda', 'Toyota', 'Ford', 'Chevy');
// foreach($cars as $car) {
// 	echo $car."<br />";
// }
$car = array('make' => 'Toyota', 'model' => 'Camry', 'color' => 'Black');
echo $car['make'];
echo $car['color'];
foreach($car as $key => $value) {
	echo ucwords($key).': '.$value.'<br />';
}
?>