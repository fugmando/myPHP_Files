<?php
// 	1. Create a db connex
	$connection = mysql_connect("localhost", "root", "root");
	if (!$connection) {
		die("Database connex failed: " . mysql_error());
	}
// 	2. Select db
	$db_select = mysql_select_db("widget_corp", $connection);
	if (!$db_select) {
		die("Database selection failed: " . mysql_error());
	}

?><html>
	<head>
		<title>mysql connect with php</title>
	</head>
	<body>
	<?php 
		echo "Connection";
	?>
	
</body>
</html>