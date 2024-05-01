<?php
$masterArray = [
    $firstPost = [
        'date' => '01-01-2007',
        'post' => [
            [
                'title' => 'Post 1',
                'author' => 'Author 1',
                'text' => 'Text 1'
            ],
        ]
    ],
    $secondPost = [
        'date' => '02-03-2012',
        'post' => [
            [
                'title' => 'Post 2',
                'author' => 'Author 2',
                'text' => 'Text 2'
            ],
        ]
    ],
    $thirdPost = [
        'date' => '11-11-1999',
        'post' => [
            [
                'title' => 'Post 3',
                'author' => 'Author 3',
                'text' => 'Text 3'
            ],
        ]
    ],
    $fourthPost = [
        'date' => '11-09-2011',
        'post' => [
            [
                'title' => 'Post 4',
                'author' => 'Author 4',
                'text' => 'Text 4'
            ],
        ]
    ],
    $fifthPost = [
        'date' => '13-08-2005',
        'post' => [
            [
                'title' => 'Post 5',
                'author' => 'Author 5',
                'text' => 'Text 5'
            ],
        ]
    ]
];

var_dump($masterArray);
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
    <title>Php snack 3</title>

</head>

<!-- Snack 3
Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post. -->

<body>
<h1 class="text-center text-primary text-uppercase border-bottom">Snack 3 -  Boolean</h1>

</body>

</html>