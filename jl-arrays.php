<html>
	<head>
		<title>scrap</title>
	</head>
	<body>
	
	<?php $array1 = array(6, 4, 1, 3, 5, 2); ?>
    
    Count: <?php echo count($array1); ?> <br>
    Max: <?php echo max($array1); ?> <br>
    Min: <?php echo min($array1); ?> <br>
    Sort: <?php sort($array1); print_r($array1); ?><br>
    Reverse Sort: <?php rsort($array1); print_r($array1); ?> <br>
    
    Implode(make a str): <?php echo $str = implode(", ", $array1); 
    /* Implode take an array and combines in into a string
    implode("separator", whicharray);
    */
    ?><br>
    
    Explode(make an array): <?php print_r( explode(", ", $str))
    /* Explode take an string and separates them into an array using 
    the separator as the place where to look for the next array item.
    implode("separator", whicharray);
    */
    ?><br>
    
    In the array?: <?php echo in_array(3, $array1); 
    /* ret bool T=1 / F="", first param is the value to look for, the sec is where to search*/
    ?>

    <pre><?php print_r($array1); ?></pre>
    <?php echo gettype($array1[0]); ?><br>
    <?php 
        $var = "hello";
        echo var_dump($var);
    ?>
    <?php echo get_defined_vars(); ?>
    
    
</body>
</html>