<?php
session_start();
$passowrd= $_SESSION["password"];

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>password</title>
</head>
<body>
<nav><a href="./index.php">Torna indietro</a></nav>
<h1>la tua password di <?php echo strlen($passowrd)?> caratteri</h1>
<pre> <?php echo $passowrd ?></pre>
    
</body>
</html>