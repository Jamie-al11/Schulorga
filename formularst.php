<head>
    <meta charset="UTF-8">
    <title>Schulorga</title>
    <link href="styles/styles.css" rel="stylesheet"/>
</head>

<form method="post" action="Empfagen.php">
<h1>Schulorga</h1>

<div class="stundenplan">
    <?php
        foreach(['mo','di','mi','do','fr'] as $wochentag){
            echo ('<div class="tag">');
            echo ("<h2>$wochentag</h2>");
            echo ("<hr>");
        $x = 6; // Anzahl der Stunden die ein fach abfragen
        $json = file_get_contents("test.txt");
        $plan = json_decode($json, true);
        $tag = $plan[$wochentag."f"];
        $n = sizeof($tag);
        for ($i = 0;$i < $x;$i++) {
            echo "<input type='hidden' name='anzahl'  value = $x >";
            if ($i   < $n ) {
                echo "<p>
                    <input type='text' name='{$wochentag}f[]' value=$tag[$i]></p>";}
            else{
               echo "<p>
                    <input type='text' name='$wochentag.f[]'></p>";
                    }}
        echo "</div>";}
        ?>

</div>
    <button type="submit"> Fertig </button>
</form>
<a href="index.php">Startseite</a>