<?php 
class Car{
	// public $make;
	// public $model;
	// public $color;
	private $make;
	private $model;
	private $color;

	public function __construct($make,$model,$color){
		$this->make = $make;
		$this->model = $model;
		$this->color = $color;
		//echo 'Car Created';
	}

	public function start(){
		echo 'Car Starting...';
	}


	public function getColor(){
		return $this->color;
	}

// 	public function setMake($make) {
// 		$this->make = $make;
// 	}

// 	public function getMake() {
// 		return $this->make;
//	}
}
 ?>

