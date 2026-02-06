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
    foreach(['mo'=> 'Montag','di' => 'Dienstag','mi' => 'Mitwoch','do' => 'Donnerstag','fr' => 'Freitag'] as $wochentag => $ganzername) {
        echo '<div class="tag">';
        echo "<h2>$ganzername</h2>";
        echo "<hr>";
        $pdo = new PDO('mysql:host=localhost;dbname=mein test', 'root', '');
        $statement = $pdo->query(" SELECT fach.name AS fachname FROM stunde JOIN fach ON fach.id = stunde.Fach_id JOIN tag ON tag.id = stunde.Tag_id WHERE tag.name = '$ganzername' ORDER BY stunde.Stunde;  ");
        $statement->execute();
         while ($row = $statement->fetch()) {
             echo "<p> {$row['fachname']}</p>";
         }
    echo "</div>";
    }
    ?>

</div>
<a href="aufgaben.php">Aufgabenseite</a>
<a href="formularst.php" >Bearbeiten</a>
</body>
</html>