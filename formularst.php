<head>
    <meta charset="UTF-8">
    <title>Schulorga</title>
    <link href="styles/styles.css" rel="stylesheet"/>
</head>

<form method="post" action="empfagen.php">
<h1>Schulorga</h1>

<div class="stundenplan">
    <div class="tag">
        <h2>Mo</h2>
        <hr>
        <?php
        $x = 9; // Anzahl der Stunden die ein fach abfragen
        $zeile = file("test.txt", FILE_IGNORE_NEW_LINES);
        $n = sizeof($zeile);
        for ($i = 0;$i < $x;$i++) {
            echo "<input type='hidden' name='anzhal'  value = $x >";
            if ($i   < $n ) {
                echo "<p>
                    <input type='text' name='mof$i'value=$zeile[$i]></p>";}
            else{
               echo "<p>
                    <input type='text' name='mof$i'></p>";
                    }}
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
    <button type="submit"> Fertig </button>
</form>
<a href="index.php">Startseite</a>