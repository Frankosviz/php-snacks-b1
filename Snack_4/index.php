<?php 
    $casualNumbers = [];

    for ($i = 0; $i < 15; $i++){
        $numbers = rand(1, 50);
        // var_dump($numbers);

        // Verifico che il numero generato non sia già presente nell'array
        if (!in_array($numbers, $casualNumbers)) {
            
        // Utilizziamo array_push per pushare numeri all'array inizialmente vuoto oppure possiamo utilizzare la notazione degli array '[]' che è più comune e leggibile 
        //$casualNumbers[] = $number;
        
        array_push($casualNumbers, $numbers);
        } else {

            // Se il numero è già presente, decremento $i per ripetere il ciclo e generare un nuovo numero
            $i--;
        }
    }

    var_dump($casualNumbers);

     
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link grity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

    <script src="js/script.js" type="module"></script>
    <title>Php snack 4</title>

</head>

<!-- Snack 4
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->

 <!-- Creo un array vuoto all'interno del quale andrò ad inserire i numeri random
 I numeri random li ottengo da un ciclo for
 Con un if vado a controllare che non ci siano numeri uguali nel mio array -->