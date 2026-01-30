<?php
$x = $_POST['anzhal'] ;


$mof = $_POST['mof'];




file_put_contents('test.txt', $mof[0]."\n");
for ($i = 1;$i < $x;$i++) {;
    file_put_contents('test.txt', $mof[$i]."\n", FILE_APPEND);}

header("Location: http://localhost/Schulorga/");
