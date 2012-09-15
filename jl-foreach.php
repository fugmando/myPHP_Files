<html>
	<head>
		<title>scrap</title>
	</head>
	<body>
	
	<?php
	    /* EX1: foreach ($array as $value) {
	        statements;
	    } 
	    ONLY works on ARRAYS!
	    */
	    $ages = array(4, 8, 15, 16, 23, 42);
	?>
    <?php
        /* EX2: the $val is a temp value like in javascript: for (x in Obj) {} */
        foreach ($ages as $val) {
            echo $val . ", ";
        }
    ?>
    <br>
    <?php
        /* MODEL 
        foreach($array as $key => $value) {
            echo $key . ": " . $value . "<br>";
        }
        */
        foreach($ages as $index => $age) {
            echo $index . ": " . $age . "<br>";
        }
    ?>
	<!-- outputs 
	    0: 4
        1: 8
        2: 15
        3: 16
        4: 23
        5: 42
    -->
    <br>
    <?php
        /* EX3: 
        */
        $prices = array("New Computer" => "2000", 
                   "Monthly Lynda.com" => 38,
                   "Learning" => "priceless...");
        foreach ($prices as $key => $value) {
            if (is_int($value)) {
                echo $key . ": $" . $value . "<br>";
            } else {
                echo $key . ": " . $value . "<br>";
            }
        }
    ?>
    
    
</body>
</html>