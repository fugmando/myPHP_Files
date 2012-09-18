<?php
// 	1. Create a db connex
	$connection = mysql_connect("localhost", "root", "root");
	if (!$connection) {
		die("Database connex failed: " . mysql_error());
	}
// 	2. Select db
// 	Once a connection is opened, it is opt to name it from here on out
	$db_select = mysql_select_db("widget_corp", $connection);
	if (!$db_select) {
		die("Database selection failed: " . mysql_error());
	}

?>
<html>
	<head>
		<title>mysql connect with php</title>
	</head>
	<body>
	<?php 
// 	3. Perform db query
	$result = mysql_query("SELECT * FROM subjects", $connection);
	if (!$result) {
		die("Database queried failed: " . mysql_error());
	}
	
// 	4. Use returned data
//  This is not an assignment, but rather checking if as long as there is (TRUE)
// 	a row of data "being assigned" to a var called $row, then keep doing it 
	while ($row = mysql_fetch_array($result)) {
// 		echo $row[1]." ".$row[2]."<br>"; 
		echo $row["menu_name"]." ".$row["position"]."<br>";
	}
	
	?>
	
</body>
</html>
<?php 
// 	5. Close connection (remember, you can simply use mysql_close(), see not above)
	mysql_close($connection);
?>