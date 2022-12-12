<?php 

$parola = $_GET["parola"];

$censura = "***";

$parola2 = str_replace($parola,$censura,$paragrafo);

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

    <h5>il paragrafo contiene <?php echo strlen("paragrafo") ?> parole</h5>

    <h3>Inserisci la parola che vuoi censurare</h3>

    <form action="" method="GET">

        <input type="text" name="parola" id="parola">

        <button type="submit">Clicca per inviare</button>
    </form>

    <h4>la parola che hai scelto è <?php echo $parola ?>  </h4>

    <p> <?php echo $parola2 ?> </p>

    <?php    
       var_dump($parola2) 
    
 ?>
    

</body>

</html>