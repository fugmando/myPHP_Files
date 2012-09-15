<html>
	<head>
		<title>Form Processing</title>
	</head>
	<body>
		
		<?php
			$username = $_POST['username'];
			$password = $_POST['password'];
			echo "{$username}: {$password}";
		
		//POST vars don't need encoding	
		?>
	</body>
</html>