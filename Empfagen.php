<?php
$name = $_POST['name'];
file_put_contents('test.txt', $name);

header("Location: http://localhost/Schulorga/");