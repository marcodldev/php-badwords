<?php 

$parola = $_GET["parola"];

$parola2 = str_replace($parola,"***",$paragrafo);

$paragrafo = "Lorem ipsum, dolor sit amet consectetur adipisicing elit.";

?> 

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>Censura la parola</h1>

    <p> <?php echo $paragrafo ?> </p>

    <h3>Inserisci la parola che vuoi censurare</h3>

    <form action="" method="GET">

        <input type="text" name="parola" id="parola">

        <button type="submit">Clicca per inviare</button>
    </form>

    <h4>la parola che hai scelto è <?php echo $parola ?>  </h4>

</body>

</html>