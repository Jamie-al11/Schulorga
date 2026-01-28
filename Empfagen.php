<?php
$mof1 = $_POST['mof1'];
$mof2 = $_POST['mof2'];
if (empty($mof1))
    {}
else
    file_put_contents('test.txt', $mof1);

if (empty($mof2))
    {}
else
    file_put_contents('test1.txt', $mof2);





header("Location: http://localhost/Schulorga/");