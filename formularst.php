<head>
    <meta charset="UTF-8">
    <title>Schulorga</title>
    <link href="styles/styles.css" rel="stylesheet"/>
</head>
<?php
function Select_fuer_die_Faecher($tagid,$stundenid,$aktuellerwert) {

    $pdo = new PDO('mysql:host=localhost;dbname=mein test', 'root', '');
    $statement = $pdo->query("SELECT id,name FROM `fach`");

    echo "<select name='stundenplan[$tagid][$stundenid]'>";
    foreach ($statement->fetchAll() as $row) {
        echo "<option value='{$row['id']}' " . ($row['id'] == $aktuellerwert ? 'selected="selected"' : '') . ">{$row['name']}</option>";

    }
    echo "</select>";
}
?>

<form method="post" action="empfangen%20datenbank.php">
<div class  = stundenplan >
    <?php
    foreach([ 'Montag','Dienstag','Mitwoch','Donnerstag','Freitag'] as $ganzername) {
        echo '<div class="tag">';
        echo "<h2>$ganzername</h2>";
        echo "<hr>";
        for ($i = 1; $i <= 9; $i++){
            echo "<p>";
            Select_fuer_die_Faecher($ganzername,$i,3);
            echo "</p>";
        }
        echo "</div>";
    }
    ?>


    </div>
    <button type="submit" >Fertig</button>

</form>
<a href="index.php">Startseite</a>