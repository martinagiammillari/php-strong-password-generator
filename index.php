<?php

$password = "";
if (isset($_GET["length"])) {

    //se è settato il parametro della lughezza della pssw
//generiamo la password



    //abbiamo i possibili contenuti della password
    $uppercase = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $lowercase = "abcdefghijklmnopqrstuvwxyz";
    $numbers = "0123456789";
    $symbols = "!@#$%^&*()-_=+[]{}|;:,.<>?/";


    //variabile che contiene tutti questi caratteri insieme
    $allChars = $uppercase . $lowercase . $numbers . $symbols;






    for ($i = 0; $i < $_GET['length']; $i++) {

        //prendo un carattere random da questa stringa

        $randomPosition = rand(min: 0, max: strlen(string: $allChars) - 1);
        $randomCharacter = substr($allChars, $randomPosition, 1);


        //aggiungi il carattere alla stringa della password per tot volte
        $password .= $randomCharacter;
    }


}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=h1, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        Generatore di password

        <hr>
    </h1>

    <form action="">
        <input id="length" name="length" type="number" min="5" max="20">
        <label for="length">lunghezza della password</label>
        <br>
        <br>
        <button>Genera</button>
    </form>

    <hr>

    <?php
    if ($password !== "") {

        ?>
        <h2>La tua password di <?php echo $_GET['length']  ?> caratteri</h2>
        <pre><?php echo $password ?></pre>
        <?php
    }
    ?>
</body>

</html>