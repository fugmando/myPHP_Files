<html>
	<head>
		<title>Functions2</title>
	</head>
	<body>
	<?php /* global variables in functions

		Variables inside a function aren't the same as the variable outside it

		Declaring a variable as global "pulls in" the variable 
			as it exists outside the function so that the function can use it.
	*/

	// Example using a global variable / not the best method to do it this way
	$bar = "outside";
	function foo() {
		global $bar; // means go get the global var and pull it inside this funx to temp work with it
		$bar = "inside";
	}
	foo();
	// guess which this will return before you try it
	echo $bar . "<br />";

	?>
	<br />
	<?php
	// Example using a local variable, arguments and return values
	$bar = "outside";
	function foo2($var) {
		$var = "inside";
		return $var;
	}
	$bar = foo2($bar);
	echo $bar . "<br />";

	// use sparingly for variables which truly are global & need to be accessed many times from many places
	// don't declare globals out of laziness--pass in arguments and return values instead
	?>
	<br />
	<?php /* default argument values
	
		Default values are a very good habit to have
		Not only does it make your function flexible and error-resistant
		but it also helps remind you want type of value you expect to be input
		
		Arguments with defaults should to the right of any required arguments
	*/
	
		function paint($color="red", $room="office") {
			echo "The color of the {$room} is {$color}.";
		}
		paint("blue","bedroom");
	?>
	
	
	
	</body>
</html>