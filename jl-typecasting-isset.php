<html>
	<head>
		<title>scrap</title>
	</head>
	<body>
	
	<?php
	    $a=9;
	    // if $a is NOT set, then set to 100
	    if (!isset($a)) {
	        $a = 100;
	    } echo $a;
	?>
	<br>
	<?php
	    // Type checking and casting
	    if (is_int($a)) {
	        settype($a, "string");
	    }
	    echo gettype($a);
	?>
    
</body>
</html>