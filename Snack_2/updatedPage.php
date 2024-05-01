<?php 

$yourName = $_GET['yourName'];
$yourEmail = $_GET['yourEmail'];
$yourAge = $_GET['yourAge'];
$accessMessage = 'Accesso riuscito';
$deniedMessage = 'Accesso negato';

// var_dump($yourName, $yourEmail, $yourAge);

// Con strpos andiamo a verificare che l'email contenga un punto e una chiocciola


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
    <title>Php snack 2</title>

</head>

<body>
    <div class="container text-center">
        <?php 
        if ($yourName > 3 && strpos($yourEmail, '@') && strpos($yourEmail, '.') && is_numeric($yourAge)) {
            echo "<h4 class='text-success'> Complimenti $yourName hai inserito tutti i dati correttamente!</h4>
            <h1 class='text-primary'>$accessMessage </h1>";
        } else {
            echo "<h4 class='text-danger text-center'> Mi dispiace $yourName alcuni dei dati inseriti sono errati!</h4>
            <h1 class='text-danger text-center'>$deniedMessage </h1>
            <h5 class='text-gray text-center'>Se non riesci ad effettuare l'accesso sei pregato di contattare il numero verde per il recupero delle credenziali</h5>
            <p class='text-gray text-decoration-underline text-center'>Numero verde <strong>9383922893823</strong></p>";
        }
        ?>
        
        
    </div>
</body>

</html>