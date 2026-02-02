<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Aufgaben</title>
    <link href="styles/styelsaufgaben.css" rel="stylesheet"/>
</head>
<body>
<h1>Aufgaben</h1>


<div class="tage">
    <h2>
        <?php
        echo date("d.m.Y");
        ?>
    </h2>
    <?php
    $test =file_get_contents('Aufgaben.txt');
    echo "<p class='aufgaben'>$test</p>";
    ?>
</div>
<div class="tag">
    <h2> <?php
        echo date("d.m.Y",strtotime("+1 day"));
        ?></h2>
    <p class="aufgaben">Andere Aufgabe</p>
</div>

<a href="index.php">Hauptseite</a>
<p></p>
<a href="formularaf.php">Formular</a>

</body>
</html>