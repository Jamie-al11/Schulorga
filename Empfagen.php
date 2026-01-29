<?php

$mof0 = $_POST["mof"];
$mof1 = $_POST['mof'];



file_put_contents('test.txt', $mof0."\n");
file_put_contents('test.txt', $mof1."\n", FILE_APPEND);






header("Location: http://localhost/Schulorga/");