<head>
    <meta charset="UTF-8">
    <title>Schulorga</title>
    <link href="styles/styles.css" rel="stylesheet"/>
</head>
<?php
function Select_fuer_die_Faecher($tagid,$stundenid)
{
    $pdo = new PDO('mysql:host=localhost;dbname=mein test', 'root', '');

// Alle Fächer laden
    $faecher = $pdo->query("SELECT id, name FROM fach")->fetchAll(PDO::FETCH_ASSOC);

// Aktuelles Fach für diese Stunde laden
    $statement = $pdo->query("
    SELECT fach.id AS fach_id
    FROM stundenplan
    JOIN fach ON fach.id = stundenplan.Fach_id
    JOIN tag ON tag.id = stundenplan.Tag_id
    WHERE tag.name = '$tagid'
      AND Stunde = '$stundenid'
");

// Falls kein Eintrag existiert → null
    $aktuellesFach = $statement->fetch(PDO::FETCH_ASSOC)['fach_id'] ?? null;
// Select ausgeben
    echo "<select name='stundenplan[$tagid][$stundenid]'>";

    foreach ($faecher as $fach) {
        $selected = ($fach['id'] == $aktuellesFach) ? "selected" : "";
        echo "<option value='{$fach['id']}' $selected>{$fach['name']}</option>";
    }

    echo "</select>";
}
?>

<form method="post" action="empfangen%20datenbank.php">
<div class  = stundenplan >
    <?php
    foreach(['Montag','Dienstag','Mittwoch', 'Donnerstag','Freitag'] as $ganzername) {
        echo '<div class="tag">';
        echo "<h2>$ganzername</h2>";
        echo "<hr>";
        for ($i = 1; $i <= 6; $i++){
            echo "<p>";
            Select_fuer_die_Faecher($ganzername,$i);
            echo "</p>";
        }
        echo "</div>";
    }
    ?>


    </div>
    <button type="submit" >Fertig</button>

</form>
<a href="index.php">Startseite</a>