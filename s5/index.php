<!-- 
	// function sayHello() {
	// 	echo "Hello";
	// }
// 	// sayHello();
// function sayIt($word) {
// 	echo $word;
// }
// sayIt("Hello World");
// function sayIt($word1, $word2 = "World") {
// 	echo $word1.' '.$word2;
// }
// sayIt("Hello");

// function sayIt($word1, $word2 = "World") {
// 	echo $word1.' '.$word2;
// }
// sayIt("Hello", "Brad");

// function add($num1, $num2) {
// 	echo $num1 + $num2;
// }
// add(7,2);

// function add($num1, $num2) {
// 	return $num1 + $num2;
// }
// echo add(7,2); -->

<!-- Linked to functions.php -->
<!-- 1. way -->

<!--
php tag 
	include 'functions.php';

echo add(7,2); -->

<!-- 2. another -->
<!-- open php tag -->  
<!-- 	require 'functions.php';

echo add(7,2);
 -->
 <!-- 3. Another way -->
<!-- php tag
 // require_once 'functions.php';

 // echo add(7,2); -->
<!-- require stops everything and include still runs -->
<!--  php tag 
 	include 'functions.php';

 	echo 'I am in index.php';
 -->
<?php
	$phrase = "I like to eat apples";
	$phrase = str_replace('apples', 'oranges', $phrase);

//	echo $phrase;
$name_array = array("Brad", "Bob", "Mike", "Sarah", "Michelle");
	// print_r($name_array);

$name_string = implode(', ',$name_array); //(first, second) ('<br /> ',$name_array)
//echo $name_string;

$car_string = 'toyota,ford,nissan,dodge,kia,mazda';
$car_array = explode(',', $car_string);
//print_r($car_array);

//echo ucwords('hello world');
//echo strtolower('HELLO WORLD');

//echo count($car_array);
sort($car_array);
print_r($car_array);