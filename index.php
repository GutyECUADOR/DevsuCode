<?php namespace app;

require ('./vendor/autoload.php');

$ejercicios = new EjerciciosClass();

?>



<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <title> Ejercicios </title>
</head>
<body>
   
    <!-- Image and text -->
    <nav class="navbar navbar-light bg-light">
    <a class="navbar-brand" href="./">
        <img src="https://getbootstrap.com/docs/4.2/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="">
        DevsuCode - Ejercicios
    </a>

    </nav>
    
    <div class="container">
        
        <div class="card">
            <div class="card-header">
                Ejercicio1
            </div>
            <div class="card-body">
                <?php
                    $response = $ejercicios->encryptyourmessage('I love prOgrAmming!');
                    var_dump($response);
                ?>
            </div>
        </div>


        <div class="card">
            <div class="card-header">
                Ejercicio 2
            </div>
            <div class="card-body">
                <?php
                    $response = $ejercicios->trackmytime();
                    var_dump($response);
                ?>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                Ejercicio 3
            </div>
            <div class="card-body">
                <?php
                    $response = $ejercicios->Ncase('Greetings, this is AN EXAMPLE!', 3);
                    var_dump($response);
                ?>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                Ejercicio 4
            </div>
            <div class="card-body">
                <?php
                    $response = $ejercicios->seriesReloaded(4);
                    echo 'El N numero de la serie es: '. $response;
                ?>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                Ejercicio 5
            </div>
            <div class="card-body">
                <?php
                    $response = $ejercicios->seriesReloaded(4);
                  
                ?>
            </div>
        </div>

       
    </div>


    <script src="https://test.oppwa.com/v1/paymentWidgets.js?checkoutId=<?php echo $objectResponse->id?>"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>