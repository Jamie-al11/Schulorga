<?php
$pdo = new PDO('mysql:host=localhost;dbname=mein test', 'root', '');
$wert = $_POST["row"];
$statement = $pdo->prepare("INSERT INTO `krasse tabelle` (`Jonas`) VALUES (:jonas)");
try {
    $statement->execute([
        ':jonas' => $wert
    ]);
    header("Location:http://localhost/Schulorga/formularst.php");
}
catch (Exception $e) {
    echo "geht nicht,nimm eine andere Zahl! ";
    echo $e->getMessage();
}
