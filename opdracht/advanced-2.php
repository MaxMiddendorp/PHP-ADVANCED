<html>
<head>
    <title>Eindopdracht</title>
</head>
<body>

<table id="table">

    <?php
    $Max = array("Voornaam" => "Max", "Achternaam" => "Middendorp", "Klas" => "9D", "Leeftijd" => 17, "Woonplaats" => "Amstelveen");
    function maakRow($key, $value)
    {

        echo "<tr> <td> $key </td> <td> $value </td> </tr>";
    }


    $backKleur = $_POST["background"];
    $border = $_POST["border"];
    $padding = $_POST["padding"];
    $tekstKleur = $_POST["tekstkleur"];

    echo "<body style='color:$tekstKleur;background-color:$backKleur'>";

    foreach ($Max as $key => $value) {
        maakRow($key, $value);
    }
    echo "<style>
    table{
        color: $tekstKleur;
        background-color: $backKleur;
        border: $border solid black;
        padding: $padding;
    }
</style>";
    ?>

</table>

</body>
</html>
