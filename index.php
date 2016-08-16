<?php 
	define('DEBUG', TRUE);

	echo "Heloo world";

	function add($num1, $num2) {
		$result = $num1 + $num2;
		return $result;
	}

	$result = add(1,1);
	echo $result;

<<<<<<< HEAD
	class Robot {
		private $name;

		function setName($name) {
			$this->name = $name;
		}
		function getNames() {
			return $this->name;
		}
	}

	$robot = new Robot();
	$robot->setName('ドラえもん');
=======
	function minus($num1, $num2) {
		$result = $num1 - $num2;
		return $result;
	}

	$result = minus(10,4);
	echo $result;
	
>>>>>>> minus_function

	// デバッグ用関数の定義
	function org_echo($val) {
		if (DEBUG) {
			echo $val;
			echo '<br>';
		}
	}
 ?>
 Initial commit