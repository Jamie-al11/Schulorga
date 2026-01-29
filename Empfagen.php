<?php
$mof1 = $_POST['mof1'];
$mof2 = $_POST['mof2'];
$mof3 = $_POST['mof3'];
$mof4 = $_POST['mof4'];
$mof5 = $_POST['mof5'];
$mof6 = $_POST['mof6'];



file_put_contents('test.txt', $mof1."\n");
file_put_contents('test.txt', $mof2."\n", FILE_APPEND);
file_put_contents('test.txt', $mof3."\n", FILE_APPEND);
file_put_contents('test.txt', $mof4."\n", FILE_APPEND);
file_put_contents('test.txt', $mof5."\n", FILE_APPEND);
file_put_contents('test.txt', $mof6."\n", FILE_APPEND);

//for ($i = 1;$i < 7;$i++){
//    $mof1 = $_POST['mof1'];
//    file_put_contents('test.txt', $mof($i)."\n");
//
//}
// das als schleife machen muss iwi gehen



header("Location: http://localhost/Schulorga/");
