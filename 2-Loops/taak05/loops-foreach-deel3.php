<!DOCTYPE html>

<html>

<body>
	<?php
    $klassen = array(
        $student  = array(
        "voornaam" => "Jan",
        "achternaam" => "Janssen",
        "klas" => "9A",
        "Leeftijd" => 17,
        "Woonplaats" => "Amstelveen"
    ));

    echo "<table style='border: 1px solid black; width:75%;'>";
    echo "<tr>";
    foreach($student as $key => $value) {
        echo "<th>$key</th>";
    }
    echo "</tr>";
    echo "<tr>";
    foreach($student as $key => $value) {
        echo "<th>$value</th>";
    }
    echo "</tr>";
    echo "</table>";
	?>
</body>

</html>