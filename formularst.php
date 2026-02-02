<head>
    <meta charset="UTF-8">
    <title>Schulorga</title>
    <link href="styles/styles.css" rel="stylesheet"/>
</head>

<form method="post" action="empfangen.php">
<h1>Schulorga</h1>

<div class="stundenplan">
    <?php
        foreach(["mo" =>"Montag","di" =>"Diensttag","mi"=> "Mittwoch","do" => "Donnerstag","fr" =>"Freitag"] as $wochentagAbgekuerzt => $wochentagLang ){
            echo ('<div class="tag">');
            echo ("<h2>$wochentagLang</h2>");
            echo ("<hr>");
        $x = 9; // Anzahl der Stunden die ein fach abfragen
        $json = file_get_contents("test.txt");
        $plan = json_decode($json, true);
        $tag = $plan[$wochentagAbgekuerzt."f"];
        $n = sizeof($tag);
        for ($i = 0;$i < $x;$i++) {
            if ($i   < $n ) {
                echo "<p>
                    <input type='text' name='{$wochentagAbgekuerzt}f[]' value=$tag[$i]></p>";}
            else{
               echo "<p>
                    <input type='text' name='$wochentagAbgekuerzt.f[]'></p>";
                    }}
        echo "</div>";}
        ?>

</div>
    <button type="submit"> Fertig </button>
</form>
<a href="index.php">Startseite</a>
