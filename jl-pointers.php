<html>
	<head>
		<title>LYNDA 7. CONTROL STRUCTURES PT.2 LOOPS, Understanding array pointers</title>
	</head>
	<body>
	
	<?php
	    // LYNDA 7. CONTROL STRUCTURES PT.2 LOOPS, Understanding array pointers
	
	    $ages = array(4, 8, 15, 16, 23, 42);
	?>
	<?php
	    // In Arrays, the pointer starts at the first value by default
	    echo $str = implode(", " , $ages); echo "<br>";
	    
	    // current() where it points to
	    echo "Pointer start: " . current($ages) . "<br>";
	    
	    next($ages); // go to next pointer
	    echo "Pointer next($ages): " . current($ages) . "<br>";

        reset($ages); // go back to beginning
	    echo "Pointer reset($ages): " . current($ages) . "<br>";
	?>
	<br>
	<?php
	    // IMPORTANT FOR DATABASES
	    // if that current pointed exists, keep going
	    // if it runs out of values, it stops
	    /*
	    This is not the T/F  as before, this is testing the assignment of current to age, if it exists      and is successful, then keep moving and assign the next value of current to age and output it. When you run out of values, then stop the loop.
	*/
	while ($age = current($ages)) {
	    echo $age . ", ";
	    next($ages);
	}
	?>
    
</body>
</html>