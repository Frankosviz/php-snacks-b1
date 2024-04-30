<?php
$arrayMatches = [
    [
        'teamHome' => 'Napoli',
        'teamAway' => 'Milan',
        'teamHomeScore' => '4',
        'teamAwayScore' => '1',
    ],
    [
        'teamHome' => 'Geona',
        'teamAway' => 'Sampdoria',
        'teamHomeScore' => '3',
        'teamAwayScore' => '0',
    ],
    [
        'teamHome' => 'Inter',
        'teamAway' => 'Torino',
        'teamHomeScore' => '2',
        'teamAwayScore' => '2',
    ],
    [
        'teamHome' => 'Benevento',
        'teamAway' => 'Palermo',
        'teamHomeScore' => '1',
        'teamAwayScore' => '1',
    ],
    [
        'teamHome' => 'Sassuolo',
        'teamAway' => 'Cesena',
        'teamHomeScore' => '3',
        'teamAwayScore' => '0',
    ],
    [
        'teamHome' => 'Atalanta',
        'teamAway' => 'Juventus',
        'teamHomeScore' => '3',
        'teamAwayScore' => '2',
    ]
    ];

    for ($i = 0; $i < count($arrayMatches); $i++) {
        $teamHome = $arrayMatches[$i]['teamHome'];
        $teamAway = $arrayMatches[$i]['teamAway'];
        $teamHomeScore = $arrayMatches[$i]['teamHomeScore'];
        $teamAwayScore = $arrayMatches[$i]['teamAwayScore'];
    }


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
    <div class="container f-d-tab fs-5 text-center d-flex align-items-center justify-content-center">
        <?php var_dump($arrayMatches); ?>
    </div>

</body>