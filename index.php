<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Schulorga</title>
    <link href="styles/styles.css" rel="stylesheet"/>
</head>
<body>
<h1>Schulorga</h1>
<div class="stundenplan">
    <div class="tag">
        <h2>Mo</h2>
        <hr>
        <?php
        $zeile = file("test.txt", FILE_IGNORE_NEW_LINES);
        $n =sizeof($zeile);
        for ($i = 0;$i < $n;$i++) {
            echo "<p>$zeile[$i]</p>";
        }
        ?>
    </div>
    <div class="tag">
        <h2>Di</h2>
        <hr>
        <?php
        for ($i = 1;$i < 7;$i++) {
            echo "<p>F$i</p>";
        }
        ?>
    </div>
    <div class="tag">
        <h2>Mi</h2>
        <hr>
        <?php
        for ($i = 1;$i < 7;$i++) {
            echo "<p>F$i</p>";
        }
        ?>

    </div>
    <div class="tag">
        <h2>Do</h2>
        <hr>
        <?php
        for ($i = 1;$i < 7;$i++) {
            echo "<p>F$i</p>";
        }
        ?>

    </div>
    <div class="tag">
        <h2>Fr</h2>
        <hr>
        <?php
        for ($i = 1;$i < 7;$i++) {
            echo "<p>F$i</p>";
        }
        ?>

    </div>
</div>
<a href="aufgaben.php">Aufgabenseite</a>
<a href="formularst.php" >Bearbeiten</a>
</body>
</html>