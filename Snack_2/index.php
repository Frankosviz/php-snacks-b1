<?php


// if (isset($_GET['yourname']) && isset($_GET['youremail']) && isset($_GET['yourage'])) {
//     $yourName = $_GET['yourName'];
//     $yourEmail = $_GET['yourEmail'];
//     $yourAge = $_GET['yourAge'];
// } else {
//     $yourName = 'Inserisci il tuo nome';
//     $yourEmail = 'Inserisci la tua email';
//     $yourAge = 'Inserisci la tua età';
// }

// if (strlen($name) > 3 && strpos($email, '@') && strpos($email, '.') && is_numeric($age)) {
//     echo 'Accesso riuscito';
// } else {
//     echo 'Accesso negato';
// }
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

<!-- Snack 2
Con un form passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<body>

    <div class="container fs-5 text-center d-flex align-items-center justify-content-center gap-3">
        <form action="updatedPage.php" method="GET">

            <h4 class="text-center text-primary">Inserisci il tuo nome</h4>
            <input type="text" name="yourName">


            <h4 class="text-center text-primary">Inserisci la tua email</h4>
            <input type="email" name="yourEmail">


            <h4 class="text-center text-primary">Inserisci la tua età</h4>
            <input type="number" name="yourAge">

            <div class="container d-flex align-items-center justify-content-center">
                <button type="submit" class="btn btn-primary mt-3">Invia</button>

        </form>


    </div>

</body>

</html>