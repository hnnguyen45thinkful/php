<?php
	// $x = 5;
	// if($x > 2) {
	// 	echo $x.' is greater than 2';
	// }		else {
	// 	echo $x.' is NOT greater than 2';
	// } 


	// $x = 4;
	// 	if ($x > 2 && $x < 10) {
	// 		echo $x.' is greater 2 ad less than 10';
	// 	}

// $x = 10;
// 	if ($x == 10) {
// 		echo $x." is 10";
// 	}
// 	elseif ($x == 2) {
// 		echo $x.' is 2';
// 	}
// 	else {
// 		echo $x.' is not 10 or 2';
// 	}

// $x = 1; 
// switch ($x) {
// 	case 2:
// 		echo $x. ' is 2';
// 		break;
// 	case 3:
// 		echo $x. ' is 3';
// 		break;
// 	default:
// 	echo $x. ' is not 2 or 3';
// 	break;
// }
// if (preg_match("/ell/", "Hello World!", $matches)) {
//   echo "Match was found <br />";
//   echo $matches[0];
// }


// if (preg_match("/[hbc]/i", "Hello World!", $matches)) {
//   echo "Match was found <br />";
//   echo $matches[0];
// }


if (preg_match("/[0-9\.\-]/i", "Hello1 World!", $matches)) {
  echo "Match was found <br />";
  echo $matches[0];
}
?>
