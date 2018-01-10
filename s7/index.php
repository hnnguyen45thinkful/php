<!-- 
	include 'classes/car.php';

	$car1 = new Car(); 
	// $car1->make = 'Toyota';
	// $car1->make = 'Honda';
	// echo $car1->make;
	//$car1->start();
	// $car1->setMake('Chevy');

	// echo $car1->getMake();
 //  -->

<?php 

	include 'classes/car.php';

		$car1 = new Car('Honda','Accord','Red');
		echo $car1->getColor();

		$car2 = new Car('Honda','Civic','Blue');
		echo $car2->getColor(); 
 ?>
