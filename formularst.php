<head>
    <meta charset="UTF-8">
    <title>Schulorga</title>
    <link href="styles/styles.css" rel="stylesheet"/>
</head>

<form method="post" action="empfangen.php">
<h1>Schulorga</h1>

    <div class="stundenplan">
        <?php
        foreach (["mo" => "Montag", "di" => "Dienstag", "mi" => "Mittwoch", "do" => "Donnerstag", "fr" => "Freitag"] as $wochentagAbgekuerzt => $wochentagLang) {
            echo '<div class="tag">';
            echo "<h2>$wochentagLang</h2>";
            echo "<hr>";
            $x = 9;
            $json = file_get_contents("test.txt");
            $plan = json_decode($json, true);
            $tag = $plan[$wochentagAbgekuerzt . "f"];
            $n = sizeof($tag);
            for ($i = 0; $i < $x; $i++) {
                $value = ($i < $n) ? $tag[$i] : "";
                echo "<p><input type='text' name='{$wochentagAbgekuerzt}f[]' value='$value'></p>";
            }
            echo "</div>";
        }
        ?>
    </div>
    <button type="submit"> Fertig </button>
</form>
<a href="index.php">Startseite</a>