<head>
    <meta charset="UTF-8">
    <title>Schulorga</title>
    <link href="styles/styles.css" rel="stylesheet"/>
</head>

<form>
    <?php
$pdo = new PDO('mysql:host=localhost;dbname=mein test', 'root', '');
$statement = $pdo->query("SELECT * FROM `krasse tabelle`");
while ($row = $statement->fetch()) {
    echo $row['Jonas'];
}
$wert = "wert";
$statement = $pdo->prepare("INSERT INTO `krasse tabelle` (`Jonas`) VALUES (:jonas)");
$statement->execute([
    ':jonas' => $wert
]);

echo "Eintrag gespeichert!";
?>


    ?>
</form>
<a href="index.php">Startseite</a>