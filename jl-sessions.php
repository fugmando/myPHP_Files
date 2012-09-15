<?php 
session_start();
?>
<html>
<head>
<title>Session</title>
</head>
<body>
	<?php 
		$_SESSION['fname'] = "Joey";
		$_SESSION['lname'] = "Lee";
	?>
	<?php 
		$name = $_SESSION['fname'] . " " . $_SESSION['lname'];
		echo $name;
	?>
</body>
</html>
