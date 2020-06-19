<html>
<head>
    <title>Eindopdracht</title>
</head>
<body>

<table id="table">

    <?php
    $Max = array("Voornaam"=>"Max","Achternaam"=>"Middendorp","Klas"=>"9D","Leeftijd"=>17,"Woonplaats"=>"Amstelveen");
    function maakRow($key,$value){

        echo "<tr> <td> $key </td> <td> $value </td> </tr>" ;
    }


    $backKleur = $_POST["back-kleur"];
    $border = $_POST["border"];
    $padding = $_POST["padding"];
    $tekstKleur = $_POST["text-kleur"];
    echo "<style>
td,table,tr,th{
    border: $border;
    border-collapse: collapse;
}
td,th{
    padding: $padding;
}
</style>";
    echo    "<body style='color:$tekstKleur;background-color:$backKleur'>" ;

    foreach($Max as $key => $value){
        maakRow($key,$value);
    }

    ?>

</table>
</body>
</hmtl>
