<html>
<head>
    <title>Taak 2.1 </title>
</head>
<body>
	<?php
		$leeftijd = 0;
		echo "<ul>";
		while($leeftijd < 18) {
			echo "<li>Ik ben $leeftijd jaar, daarom mag ik nog niet stemmen</li></br>";
			$leeftijd++;
		}
		if($leeftijd == 18){
			echo "<li>Ik ben $leeftijd jaar oud dus nu heb ik stemrecht!</li>";
		}
		echo "</ul>";
	?>
</body>

</html>
