<head>
    <meta charset="UTF-8">
    <title>Schulorga</title>
    <link href="styles/styles.css" rel="stylesheet"/>
</head>

<form method="post" action="Empfagen.php">
<h1>Schulorga</h1>

<div class="stundenplan">
    <div class="tag">
        <h2>Mo</h2>
        <hr>
        <?php
        $x = 6; // Anzahl der Stunden die ein fach abfragen
        $json = file_get_contents("test.txt");
        $plan = json_decode($json, true);
        $mo = $plan["mof"];
        $n = sizeof($mo);
        for ($i = 0;$i < $x;$i++) {
            echo "<input type='hidden' name='anzahl'  value = $x >";
            if ($i   < $n ) {
                echo "<p>
                    <input type='text' name='mof[]' value=$mo[$i]></p>";}
            else{
               echo "<p>
                    <input type='text' name='mof[]'></p>";
                    }}
        ?>
    </div>
  <div class="tag">
      <h2>Di</h2>
      <hr>
      <?php
      $x = 6; // Anzahl der Stunden die ein fach abfragen
      $json = file_get_contents("test.txt");
      $plan = json_decode($json, true);
      $di = $plan["dif"];
      $n = sizeof($di);
      for ($i = 0;$i < $x;$i++) {
          echo "<input type='hidden' name='anzahl'  value = $x >";
          if ($i   < $n ) {
              echo "<p>
                    <input type='text' name='dif[]' value=$di[$i]></p>";}
          else{
              echo "<p>
                    <input type='text' name='dif[]'></p>";
          }}
      ?>
  </div>
  <div class="tag">
      <h2>Mi</h2>
      <hr>
      <?php
      $x = 6; // Anzahl der Stunden die ein fach abfragen
      $json = file_get_contents("test.txt");
      $plan = json_decode($json, true);
      $mi = $plan["mif"];
      $n = sizeof($mi);
      for ($i = 0;$i < $x;$i++) {
          echo "<input type='hidden' name='anzahl'  value = $x >";
          if ($i   < $n ) {
              echo "<p>
                    <input type='text' name='mif[]' value=$mi[$i]></p>";}
          else{
              echo "<p>
                    <input type='text' name='mif[]'></p>";
          }}
      ?>
  </div>
  <div class="tag">
      <h2>Do</h2>
      <hr>
      <?php
      $x = 6; // Anzahl der Stunden die ein fach abfragen
      $json = file_get_contents("test.txt");
      $plan = json_decode($json, true);
      $do = $plan["dof"];
      $n = sizeof($do);
      for ($i = 0;$i < $x;$i++) {
          echo "<input type='hidden' name='anzahl'  value = $x >";
          if ($i   < $n ) {
              echo "<p>
                    <input type='text' name='dof[]' value=$do[$i]></p>";}
          else{
              echo "<p>
                    <input type='text' name='dof[]'></p>";
          }}
      ?>
  </div>
  <div class="tag">
      <h2>Fr</h2>
      <hr>
      <?php
      $x = 6; // Anzahl der Stunden die ein fach abfragen
      $json = file_get_contents("test.txt");
      $plan = json_decode($json, true);
      $fr = $plan["frf"];
      $n = sizeof($fr);
      for ($i = 0;$i < $x;$i++) {
          echo "<input type='hidden' name='anzahl'  value = $x >";
          if ($i   < $n ) {
              echo "<p>
                    <input type='text' name='frf[]' value=$fr[$i]></p>";}
          else{
              echo "<p>
                    <input type='text' name='frf[]'></p>";
          }}
      ?>

  </div>
</div>
    <button type="submit"> Fertig </button>
</form>
<a href="index.php">Startseite</a>