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
	<?php $array3 = array("firstname" => "Joe", "lastname" => "Lee"); ?>
	<?php echo $array3["firstname"] . " " . $array3["lastname"]; ?>
	output: Joe Lee
	<?php $array3["firstname"] = "Larry"; ?>
	<?php echo $array3["firstname"] . " " . $array3["lastname"]; ?>
	
	<pre><?php print_r($array2); ?></pre>
</body>
</html>