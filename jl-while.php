<html>
	<head>
		<title>scrap</title>
	</head>
	<body>
	
	<?php
	    $x = 0;
        // while this is True
	    while ($x <= 10) {
	        // then do this if statement
	        if ($x == 5) {
	            echo "FIVE /";
	        } else {
	            echo $x . ", ";
	        }
	        // increment and then go back up and loop
	        $x++;
	    }
	    // when no longer T, exit and do this
	    echo "<br>Count: {$x}";	
	?>
	<!-- outputs 
	    OUTPUT: 0, 1, 2, 3, 4, FIVE /6, 7, 8, 9, 10, 
        Count: 11
    -->
    
</body>
</html>