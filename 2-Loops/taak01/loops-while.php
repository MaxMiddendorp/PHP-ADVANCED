<!DOCTYPE html>

<html>

<body>
	<?php
		$leeftijd = 0;
		echo "<ul>";
		while($leeftijd < 18) {
			echo "<li>Ik ben $leeftijd jaar, dus ik mag nog niet stemmen</li></br>";
			$leeftijd++;
		}
		if($leeftijd == 18){
			echo "<li>Ik ben $leeftijd jaar oud dus ik heb stemrecht!</li>";
		}
		echo "</ul>";
	?>
</body>

</html>
