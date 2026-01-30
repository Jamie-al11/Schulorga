<?php
$x = $_POST['anzahl'];

foreach (['mo','di','mi','do','fr'] as $tag) {
    ${$tag.'f'} = $_POST[$tag.'f'];
}

$stundenplan = array( "mof" => $mof,
                      "dif" => $dif,
                      "mif" => $mif,
                      "dof" => $dof,
                      "frf" => $frf
                );
file_put_contents("test.txt", json_encode($stundenplan, JSON_PRETTY_PRINT));

header("Location: http://localhost/Schulorga/");
echo"<a href='index.php'> startseite</a>";
