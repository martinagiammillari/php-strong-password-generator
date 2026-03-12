<?php
require_once 'functions.php';
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