<html>
	<head>
		<title>scrap</title>
	</head>
	<body>
	<?php
	    $var1 = "2 words";
	    $var2 =  $var1 + 3;
	    
	    echo "$var2: " . $var2 . "<br>";
	    echo "$var1: ". gettype($var1) . "<br>";
        echo gettype($var2) . "<br>";
        settype($var2,"string");
        echo gettype($var2) .  "<br>";
        $var3 = (int) $var1;
	    echo gettype($var3) . "<br>";
	?>

</body>
</html>