<?php
$masterArray = [
    $firstPost = [
        'date' => '01-01-2007',
        'post' => [
            [
                'author' => 'marx_99',
                'title' => 'Oggi è una bella giornata',
                'image' => 'https://picsum.photos/200/300'
            ],
        ]
    ],
    $secondPost = [
        'date' => '02-03-2012',
        'post' => [
            [
                'author' => 'josueKing',
                'title' => 'Con i bro',
                'image' => 'https://picsum.photos/210/300'
            ],
        ]
    ],
    $thirdPost = [
        'date' => '11-11-1999',
        'post' => [
            [
                'author' => 'blaffoff22',
                'title' => 'Auguri a tutte le donne!',
                'image' => 'https://picsum.photos/240/300'
            ],
        ]
    ],
    $fourthPost = [
        'date' => '11-09-2011',
        'post' => [
            [
                'author' => 'theJoker',
                'title' => 'Ciao mamma guarda come mi diverto',
                'image' => 'https://picsum.photos/150/300'
            ],
        ]
    ],
    $fifthPost = [
        'date' => '13-08-2005',
        'post' => [
            [
                'author' => 'marziano76',
                'title' => 'Posillipo 2022',
                'image' => 'https://picsum.photos/250/300'
            ],
        ]
    ]
];

// var_dump($masterArray);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link grity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style3.css">

    <script src="js/script.js" type="module"></script>
    <title>Php snack 3</title>

</head>

<!-- Snack 3
Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post. -->

<body>
    <h1 class="text-center text-primary text-uppercase border-bottom">Snack 3 - Boolean</h1>
    <div class="container d-flex align-items-center justify-content-center gap-3 mt-3">
        <?php
        for ($i = 0; $i < count($masterArray); $i++) {
            echo
                "<div>
                <p class='card-text text-success fw-bold text-center'>{$masterArray[$i]['post'][0]['author']}</p>
            <img src='{$masterArray[$i]['post'][0]['image']}' class=' f-d-card' alt='img'>
            <div class='f-d-card-border d-flex flex-column align-items-center justify-content-between'>
                <p class='card-text fw-bold '>{$masterArray[$i]['post'][0]['title']}</p>
                <p class='card-text text-primary '>{$masterArray[$i]['date']}</p>
            </div>
        </div>";
        }
        ?>

</body>

</html>