<?php
require_once 'functions.php';

if ($password !== "") {
    //dirottiamo l'utente alla pagina password.php

    session_start();
    //salviamo la password in una variabile di sessione

    $_SESSION['password'] = $password;


     header("location: ./password.php");
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=h1, initial-scale=1.0">
    <title>generatore di password</title>
</head>

<body>
    <h1>
        Generatore di password

        <hr>
    </h1>

    <form action="">
        <input id="length" name="length" type="number" value="5" min="5" max="20">
        <label for="length">lunghezza della password</label>

        <div>
            <input id="letters" name="letters" type="checkbox"><label for="letters">Lettere</label>
            <input id="numbers" name="numbers" type="checkbox"><label for="numbers">Numeri</label>
            <input id="symbols" name="symbols" type="checkbox"><label for="symbols">Simboli</label>
        </div>


        <br>
        <br>
        <button>Genera</button>
    </form>

    <hr>

    <?php
    if ($password !== "") {

        ?>
        <h2>La tua password di <?php echo $_GET['length'] ?> caratteri</h2>
        <pre><?php echo $password ?></pre>
        <?php
    }
    ?>
</body>

</html>