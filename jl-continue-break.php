<html>
	<head>
		<title>scrap</title>
	</head>
	<body>
	
	<?php
	    for ($i=0; $i <= 10; $i++)  {
	        if ($i == 5) {
	            echo "no FIVE<br>";
	            continue;
	            // continue means to just go back up and reloop, 
	            // don't go any further down
	        }
	        // solution to getting rid of the last comma
	        // echo value,then if 10, then break and not get to drawing the ","
	        echo $i;
	        if ($i == 10) { 
	            break; 
	            }
	        echo ", ";
	    }
	?>
	
	
    
</body>
</html>