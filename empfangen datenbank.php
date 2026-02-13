<?php
$pdo = new PDO('mysql:host=localhost;dbname=mein test', 'root', '');
foreach([1=> 'Montag',2 => 'Dienstag',3 => 'Mittwoch',4 => 'Donnerstag',5 => 'Freitag'] as $tagid => $ganzername) {
    for ($i = 1 ;$i <= 9 ; $i++) {
        $fach = $_POST['stundenplan'][$ganzername][$i];
        echo $fach . "<hr>";

        $pdo ->query("UPDATE stundenplan SET Fach_id = $fach WHERE Tag_id = $tagid AND Stunde = $i;" );

    }
    echo "<hr>";
}
header("Location: index.php");
