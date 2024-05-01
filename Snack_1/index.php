<?php
$arrayMatches = [
    [
        'teamHome' => 'Napoli',
        'teamAway' => 'Milan',
        'teamHomeScore' => '4',
        'teamAwayScore' => '1',
    ],
    [
        'teamHome' => 'Genoa',
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
    ],
    [
        'teamHome' => 'Lecce',
        'teamAway' => 'Ascoli',
        'teamHomeScore' => '3',
        'teamAwayScore' => '0',
    ],
    [
        'teamHome' => 'Pordenone',
        'teamAway' => 'Brescia',
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
        'teamHome' => 'Cremonese',
        'teamAway' => 'Airola',
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
    ],
    [
        'teamHome' => 'Lecce',
        'teamAway' => 'Ascoli',
        'teamHomeScore' => '3',
        'teamAwayScore' => '0',
    ],
    [
        'teamHome' => 'Pordenone',
        'teamAway' => 'Brescia',
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
        'teamHome' => 'Cremonese',
        'teamAway' => 'Airola',
        'teamHomeScore' => '3',
        'teamAwayScore' => '0',
    ]
];

// for ($i = 0; $i < count($arrayMatches); $i++) {
//     $teamHome = $arrayMatches[$i]['teamHome'];
//     $teamAway = $arrayMatches[$i]['teamAway'];
//     $teamHomeScore = $arrayMatches[$i]['teamHomeScore'];
//     $teamAwayScore = $arrayMatches[$i]['teamAwayScore'];

//     echo $teamHome . ' - ' . $teamAway . ' | ' . $teamHomeScore . '-' . $teamAwayScore . '<br>';
// }


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
    <h1 class="text-center text-primary text-uppercase border-bottom">Snack 1 - Boolean</h1>
    <div class="container f-d-tab  text-center d-flex align-items-center justify-content-center">
        <?php
        for ($i = 0; $i < count($arrayMatches); $i++) {
            $teamHome = $arrayMatches[$i]['teamHome'];
            $teamAway = $arrayMatches[$i]['teamAway'];
            $teamHomeScore = $arrayMatches[$i]['teamHomeScore'];
            $teamAwayScore = $arrayMatches[$i]['teamAwayScore']; ?>
            <div class="container fs-1 d-flex flex-column align-items-center justify-content-center">
                <?php
                echo $teamHome . ' - ' . $teamAway . ' | ' . $teamHomeScore . '-' . $teamAwayScore . '<br>';
        }
        ?>
        </div>
    </div>

</body>

</html>