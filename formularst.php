
<form method="post" action="empfagen.php">
    <h1> Formular</h1>
    <?php
    for ($i = 1;$i < 7;$i++) {
        echo "<label> $i </label>";
        echo "<input type='text' name='mof$i'>";
        echo "<p></p>";
    }
    ?>
    <button type="submit"> Fertig </button>
</form>
<a href="index.php">Startseite</a>