
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

        $randomPosition = rand(0, strlen($allChars) - 1);
        $randomCharacter = substr($allChars, $randomPosition, 1);


        //aggiungi il carattere alla stringa della password per tot volte
        $password .= $randomCharacter;
    }


}
?>
