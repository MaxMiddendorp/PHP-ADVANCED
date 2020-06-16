<!DOCTYPE html>

<html>

<body>
	<?php
        $klassen = array("8A", "8B", "8C", "8D", "8E", "9A", "9B", "9C", "9D", "9E");
        echo "Ik zit in klas: ";
        echo "<select>";
        foreach($klassen as $value){
            echo "<option value=$value>$value</option>";
        }
        echo "</select>";

        echo "<ul>";
        foreach($klassen as $value){
            echo "<li>$value</li>";
        }
        echo "</ul>";
    ?>
</body>

</html>
