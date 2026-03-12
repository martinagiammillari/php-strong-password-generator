<?php
$password = "";
if (isset($_GET["length"])) {

    //se è settato il parametro della lughezza della pssw
//generiamo la password



    //abbiamo i possibili contenuti della password
    $letters = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";

    $numbers = "0123456789";
    $symbols = "!@#$%^&*()-_=+[]{}|;:,.<>?/";
    $allChars = "";





    //controllo se inserire le lettere 
    if (isset($_GET["letters"]) && $_GET["letters"] === "on") {
        $allChars .= $letters;
    }

    //controllo se inserire i numeri
    if (isset($_GET["numbers"]) && $_GET["numbers"] === "on") {
        $allChars .= $numbers;
    }

    //controllo se inserire i simboli
    if (isset($_GET["symbols"]) && $_GET["symbols"] === "on") {
        $allChars .= $symbols;
    }


  



    //variabile che contiene tutti questi caratteri insieme
    // $allChars = $letters . $numbers . $symbols;






    for ($i = 0; $i < $_GET['length']; $i++) {

        //prendo un carattere random da questa stringa

        $randomPosition = rand(0, strlen($allChars) - 1);
        $randomCharacter = substr($allChars, $randomPosition, 1);


        //aggiungi il carattere alla stringa della password per tot volte
        $password .= $randomCharacter;
    }




}
?>