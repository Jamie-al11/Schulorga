<?php

foreach (['mo','di','mi','do','fr'] as $tag) {
    if (empty($_POST[$tag.'f'])) {
        $_POST[$tag.'f'] = array("kein fach",);
    }
    $_POST[$tag.'f'] = array_filter($_POST[$tag.'f'],fn($x) => $x !==""and $x !== " ");
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
