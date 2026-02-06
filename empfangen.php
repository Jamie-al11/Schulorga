<?php
$stundenplan = $_POST["stundenplan"];

foreach (array_keys($stundenplan) as $key) {
    $stundenplan[$key] = array_filter($stundenplan[$key], fn($x) => $x !== "" and $x !== " ");
}


file_put_contents("test.txt", json_encode($stundenplan, JSON_PRETTY_PRINT));

header("Location: http://localhost/Schulorga/");
echo"<a href='index.php'> startseite</a>";
