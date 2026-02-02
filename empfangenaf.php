<?php
$x = $_POST['aufgabe'];
file_put_contents("Aufgaben.txt", $x);
header("Location:aufgaben.php");
