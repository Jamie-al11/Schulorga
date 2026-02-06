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
            $pdo = new PDO('mysql:host=localhost;dbname=mein test', 'root', '');
            $statement = $pdo->query("SELECT stunde.Stunde,fach.name FROM `stunde` JOIN `fach` ON fach.id = stunde.Fach_id; ");
            while ($row = $statement->fetch()) {
                echo $row['name'];
                echo "<p>";
                }}
    ?>

</div>
<a href="aufgaben.php">Aufgabenseite</a>
<a href="formularst.php" >Bearbeiten</a>
</body>
</html>