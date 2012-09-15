<html>
	<head>
		<title>scrap</title>
	</head>
	<body>
	<?php
	    $var1 = "2 words";
	    $var2 =  $var1 + 3;
	    echo $var2;
	?>
	<br>
	<?php
	    echo gettype($var1); echo "<br>";
        echo gettype($var2); echo "<br>";
        settype($var2,"string");
        echo gettype($var2);
        $var3 = (int) $var1;
	    echo gettype($var3); echo "<br>";
	?>

</body>
</html>