<?php
$mof1 = $_POST['mof0'];
$mof2 = $_POST['mof1'];
$mof3 = $_POST['mof2'];
$mof4 = $_POST['mof3'];
$mof5 = $_POST['mof4'];
$mof6 = $_POST['mof5'];


if ($mof1 !== " ")
    file_put_contents('test.txt', $mof1."\n");

if ($mof2 !== " ")
    file_put_contents('test.txt', $mof2."\n", FILE_APPEND);

if ($mof3 !== " ")
    file_put_contents('test.txt', $mof3."\n", FILE_APPEND);

if ($mof4 !== " ")
    file_put_contents('test.txt', $mof4."\n", FILE_APPEND);

if ($mof5 !== " ")
    file_put_contents('test.txt', $mof5."\n", FILE_APPEND);

if ($mof6 !== " ")
    file_put_contents('test.txt', $mof6."\n", FILE_APPEND);


header("Location: http://localhost/Schulorga/");