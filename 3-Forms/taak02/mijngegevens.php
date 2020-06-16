<!DOCTYPE html>

<html>
<head>
    <title>Mijn gegevens</title>
</head>    
<body>
	<?php
    echo "Naam: " . $_POST["voornaam"];
    echo " " . $_POST["achternaam"] . "</br>";
    echo "Geslacht: " . $_POST["geslacht"] . "</br>";
    echo "Klas: " . $_POST["klas"] . "</br>";
    echo "Leeftijd: " . $_POST["leeftijd"] . " jaar </br>";
    echo "Adres: " . $_POST["adres"] . "</br>";
    echo "Woonplaats: " . $_POST["woonplaats"] . "</br>";
    $color = $_POST['kleur'];
    echo "<body style='background-color:$color'>";
	?>
</body>

</html>