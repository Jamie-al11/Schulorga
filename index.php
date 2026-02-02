<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Schulorga</title>
    <link href="styles/styles.css" rel="stylesheet"/>
</head>
<body>
<h1>Schulorga</h1>
<div class="stundenplan">
    <?php
        foreach(['mo','di','mi','do','fr'] as $wochentag){
            $ganzername = array("mo" =>"Monatg","di" =>"Diensttag","mi"=> "Mittwoch","do" => "Donnerstag","fr" =>"Freitag");
            echo '<div class="tag">';
            echo "<h2>$ganzername[$wochentag]</h2>";
            echo "<hr>";
        $json = file_get_contents("test.txt");
        if (empty($json)){
            echo ("ist leer");
            header("Location: http://localhost/Schulorga/empfangen.php");
        }
        $plan = json_decode($json, true);
        $wochentag = $plan[$wochentag."f"];
        $n =sizeof($wochentag);
        for ($i = 0;$i < $n;$i++) {
            echo "<p>$wochentag[$i]</p>";
        }

    echo ("</div>");
        }
    ?>

</div>
<a href="aufgaben.php">Aufgabenseite</a>
<a href="formularst.php" >Bearbeiten</a>
</body>
</html>