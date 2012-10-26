<html>
	<head>
		<title>scrap</title>
	</head>
	<body>
	<?php  
		$result = "u'28.7200000000', u'-88.3800000000', u'B23', u'2010-05-16 00:00', u'50', u'50', u'Brooks-McCall Cruise 02 MAY 15-17 2010', u'0.410000000000";
		$myArray = explode(",", $result);
		?>
		<pre><?php print_r($myArray); ?></pre>
		<?php foreach ($myArray as $value) {
			
		}?>
	<p>
First Name: <span id="fname"></span><br> 
Last Name: <span id="lname"></span><br> 
</p> 
<script>
var txt = '{"employees":[' +
'{"firstName":"John","lastName":"Doe" },' +
'{"firstName":"Anna","lastName":"Smith" },' +
'{"firstName":"Peter","lastName":"Jones" }]}';

var obj = eval ("(" + txt + ")");

document.getElementById("fname").innerHTML=obj.employees[1].firstName 
document.getElementById("lname").innerHTML=obj.employees[1].lastName 
</script>
	
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