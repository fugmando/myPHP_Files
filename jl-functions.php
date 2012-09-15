<html>
	<head>
		<title>Functions</title>
	</head>
	<body>
	<?php /* User-defined functions

		function name($argument1, $argument2 ...) {
		    statement
		}
		does NOT require semicolons except after statements
		{} go around function statements

	*/ ?>
	<?php
		// A variable can be passed as an argument
		// The variable name has no relationship to the argument name
		/*
		$name = "John Doe";
		say_hello2($name);
	    */
	?>
	<br />
	<?php
		// uses return to explictly return a value
		function addition($val1, $val2) {
			$sum = $val1 + $val2;
			return $sum;
		}
		// VERY good habit to ALWAYS return a value from a function (even if return true;)
		// return exits the function and returns a value to where the function call was made
		// don't put parentheses around value to be returned
		
		// returned values can be assigned to variables
		// here the return $sum is assigned to $new_val
		$new_val = addition(3,4);
		echo $new_val ."<br>";
		
		// returned values can be used in logical expressions
		if (addition(5,6) == 11) {
			echo "Yes <br>";
		}
		
		// Return can only return only ONE value, unless ...
		// To return more than one value, put them all into an array and return the array
		
		// This function adds, then subtracts, then returns both results as an array
		function add_subt($val1, $val2) {
			$add = $val1 + $val2;
			$subt = $val1 - $val2;
			$result = array($add, $subt);
			return $result;
		}
		// this invokes the funx and returns array "$result" and assigns it to "$result_array"
		$result_array = add_subt(10,5);
		echo "Add: " . $result_array[0] . "<br>"; // this gets the first array elem which is $add
		echo "Subt: " . $result_array[1]; // this gets the second array elem which is $subt
        
        // Define Defaults by "="
        function paint($color="red", $room="office") {
            echo "The color of the {$room} is {$color}.";
        }
        paint("blue","bedroom");


	?>
	
	
	
	</body>
</html>