<html>
<head>
    <title>Taak 3.3 </title>
</head>
<body>
    <?php
    $muziek = array("Artiest: "=>"DI-RECT", "Titel: "=>"Soldier On", "Jaar van uitkomst: "=>2020, "Muzieksoort: "=>"Pop");
    echo "<ul>";
    foreach($muziek as $value){
        echo "<li>$value</li>";
    }
    echo "</ul>";

	?>
</body>

</html>
