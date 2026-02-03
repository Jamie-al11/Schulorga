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
        foreach(['mo'=> 'Monatg','di' => 'Diensttag','mi' => 'Mitwoch','do' => 'Donnerstag','fr' => 'Freitag'] as $wochentag => $ganzername){
            echo '<div class="tag">';
            echo "<h2>$ganzername</h2>";
            echo "<hr>";
        $json = file_get_contents("test.txt");
        $plan = json_decode($json, true);
        $wochentag = $plan[$wochentag."f"];
        foreach ($wochentag as $fach)
            { echo "<p>$fach</p>";
        }
    echo ("</div>");
        }
    ?>

</div>
<a href="aufgaben.php">Aufgabenseite</a>
<a href="formularst.php" >Bearbeiten</a>
</body>
</html>