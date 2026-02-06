<head>
    <meta charset="UTF-8">
    <title>Schulorga</title>
    <link href="styles/styles.css" rel="stylesheet"/>
</head>

<form method="post" action="empfangen%20datenbank.php">
    <?php
$pdo = new PDO('mysql:host=localhost;dbname=mein test', 'root', '');
$statement = $pdo->query("SELECT * FROM `tag`");
while ($row = $statement->fetch()) {
    echo $row['name'];
    echo "<p>";
}
echo "<input type=text name='row'>";
?>


    <button type="submit" >Fertig</button>
</form>
<a href="index.php">Startseite</a>