<?php

$mof = array($_POST['mof0'],$_POST['mof1'],$_POST['mof2'],$_POST['mof3'],$_POST['mof4'],$_POST['mof5']);

file_put_contents('test.txt', $mof[0]."\n");
for ($i = 1;$i < 6;$i++) {;
    file_put_contents('test.txt', $mof[$i]."\n", FILE_APPEND);}

header("Location: http://localhost/Schulorga/");