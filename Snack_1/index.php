<?php
$firstMatch = [
    'teamHome' => 'Napoli',
    'teamAway' => 'Milan',
    'teamHomeScore' => '4',
    'teamAwayScore' => '1',
];
$secondMatch = [
    'teamHome' => 'Geona',
    'teamAway' => 'Sampdoria',
    'teamHomeScore' => '3',
    'teamAwayScore' => '0',
];
$thirdMatch = [
    'teamHome' => 'Inter',
    'teamAway' => 'Torino',
    'teamHomeScore' => '2',
    'teamAwayScore' => '2',
];
$fourthMatch = [
    'teamHome' => 'Benevento',
    'teamAway' => 'Palermo',
    'teamHomeScore' => '1',
    'teamAwayScore' => '1',
];
$fifthMatch = [
    'teamHome' => 'Sassuolo',
    'teamAway' => 'Cesena',
    'teamHomeScore' => '3',
    'teamAwayScore' => '0',
];
$sixthMatch = [
    'teamHome' => 'Atalanta',
    'teamAway' => 'Juventus',
    'teamHomeScore' => '3',
    'teamAwayScore' => '2',
];

// proseguire con ciclo for stasera



// var_dump($firstMatch);
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
    <title>Php snack 1</title>

</head>

<!-- Snack 1
Creiamo un array contenente le partite di calcio di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55-60 -->


<body>
    <div class="container f-d-tab fs-5">
        <div>
            <p>
                <?php echo $firstMatch['teamHome']

                    ?>
            </p>
            <p>
                <?php echo $firstMatch['teamHomeScore'] 
                
                ?>
            </p>
        </div>
        <div>
            <p>
                <?php echo $firstMatch['teamAway']

                    ?>
            </p>
            <p>
                <?php echo $firstMatch['teamAwayScore'] ?>
            </p>
        </div>
    </div>

</body>