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
    <?php
        foreach(['mo','di','mi','do','fr'] as $wochentag){
            echo '<div class="tag">';
            echo "<h2>$wochentag</h2>";
            echo "<hr>";
        $json = file_get_contents("test.txt");
        $plan = json_decode($json, true);
        $wochentag = $plan[$wochentag."f"];
        $n =sizeof($wochentag);
        for ($i = 0;$i < $n;$i++) {
            echo "<p>$wochentag[$i]</p>";
        }

    echo ("</div>");
        }
    ?>
<!--    <div class="tag">-->
<!--        <h2>Di</h2>-->
<!--        <hr>-->
<!--        --><?php
//        $json = file_get_contents("test.txt");
//        $plan = json_decode($json, true);
//        $mo = $plan["dif"];
//        $mn =sizeof($mo);
//        for ($i = 0;$i < $mn;$i++) {
//            echo "<p>$mo[$i]</p>";
//        }
//        ?>
<!--    </div>-->
<!--    <div class="tag">-->
<!--        <h2>Mi</h2>-->
<!--        <hr>-->
<!--        --><?php
//        $json = file_get_contents("test.txt");
//        $plan = json_decode($json, true);
//        $mo = $plan["mif"];
//        $mn =sizeof($mo);
//        for ($i = 0;$i < $mn;$i++) {
//            echo "<p>$mo[$i]</p>";
//        }
//        ?>
<!---->
<!--    </div>-->
<!--    <div class="tag">-->
<!--        <h2>Do</h2>-->
<!--        <hr>-->
<!--        --><?php
//        $json = file_get_contents("test.txt");
//        $plan = json_decode($json, true);
//        $mo = $plan["dof"];
//        $mn =sizeof($mo);
//        for ($i = 0;$i < $mn;$i++) {
//            echo "<p>$mo[$i]</p>";
//        }
//        ?>
<!---->
<!--    </div>-->
<!--    <div class="tag">-->
<!--        <h2>Fr</h2>-->
<!--        <hr>-->
<!--        --><?php
//        $json = file_get_contents("test.txt");
//        $plan = json_decode($json, true);
//        $mo = $plan["frf"];
//        $mn =sizeof($mo);
//        for ($i = 0;$i < $mn;$i++) {
//            echo "<p>$mo[$i]</p>";
//        }
//        ?>
<!--    </div>-->
</div>
<a href="aufgaben.php">Aufgabenseite</a>
<a href="formularst.php" >Bearbeiten</a>
</body>
</html>