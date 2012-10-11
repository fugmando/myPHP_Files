<html>
	<head>
		<title>scrap</title>
	</head>
	<body>
	learning how to use git
	<?php $array2 = array(6,"fox", "dog", array("x", "y", "z")); ?>
	<?php echo $array2[3][1]; ?>
	<?php $array2[2] = "cat"?>
	<?php echo $array2[2]; ?>
	<br>
	<?php $array3 = array(
			"firstname" => "Joe", 
			"lastname" => "Lee"
			); ?>
	<?php echo $array3["firstname"] . " " . $array3["lastname"]; ?>
	output: Joe Lee
	<?php $array3["firstname"] = "Larry"; ?>
	<?php echo $array3["firstname"] . " " . $array3["lastname"]; ?>
	
	<pre><?php print_r($array2); ?></pre>
	
	<form action="process.php" method="post">
		Username: <input type="text" name="user" value="" /><br>
		Password: <input type="text" name="pswd" value="" />
	</form>
	
	<?php $f = file_get_contents("xmlSampleData.xml");
		echo $f . "<br>";
		
		echo gettype($f);

		$myarray = array();
		$myarray = explode(" ", $f);
		
	?>
	<pre>
		<?php print_r($myarray)?>
	</pre>
</body>
</html>