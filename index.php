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
        <p>
            <?php
            $test =file_get_contents('test.txt');
            echo $test;
            ?>
        </p>
        <p>
            <?php
            $test =file_get_contents('test1.txt');
            echo $test;
            ?>
        </p>
        <p>F3</p>
        <p>F4</p>
        <p>F5</p>
        <p>F6</p>

    </div>
    <div class="tag">
        <h2>Di</h2>
        <hr>
        <p>F1</p>
        <p>F2</p>
        <p>F3</p>
        <p>F4</p>
        <p>F5</p>
        <p>F6</p>
    </div>
    <div class="tag">
        <h2>Mi</h2>
        <hr>
        <p>F1</p>
        <p>F2</p>
        <p>F3</p>
        <p>F4</p>
        <p>F5</p>
        <p>F6</p>

    </div>
    <div class="tag">
        <h2>Do</h2>
        <hr>
        <p>F1</p>
        <p>F2</p>
        <p>F3</p>
        <p>F4</p>
        <p>F5</p>
        <p>F6</p>

    </div>
    <div class="tag">
        <h2>Fr</h2>
        <hr>
        <p>F1</p>
        <p>F2</p>
        <p>F3</p>
        <p>F4</p>
        <p>F5</p>
        <p>F6</p>

    </div>
</div>
<a href="aufgaben.php">Aufgabenseite</a>
<a href="formularst.php" >Formular</a>
</body>
</html>