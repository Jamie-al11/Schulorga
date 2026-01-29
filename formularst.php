
<form method="post" action="formularst.php">
    <h1> Formular</h1>
    <?php
    for ($i = 0;$i < 6;$i++) {
        echo "<label> $i </label>";
        echo "<input type='text' name='mof[$i]'>";
        echo "<p></p>";

    }
    ?>
    <button type="submit"> Fertig </button>
</form>
<a href="index.php"> Startseite </a>
