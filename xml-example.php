<html>
	<head>
		<title>xml example</title>
	</head>
	<body>
	<?php 
		$xml = simplexml_load_file('xmlSampleData.xml');
// 		echo $xml->producer[2]->name.": ".$xml->producer[2]->age;
		foreach ($xml->producer as $producer) {
			echo $producer->name ." (". $producer->age . ")<br>";
			
			foreach ($producer->show as $show) {
				echo "&nbsp;&nbsp;". 
					$show->showname . " on: ". 
					$show->showdate ."<br>";
			} 
		}
		?>
</body>
</html>