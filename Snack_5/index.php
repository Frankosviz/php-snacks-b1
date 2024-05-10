<?php
$paragraph = 'Buonasera a tutti. Oggi è il primo Maggio ed ho studiato tutto il giorno. Sto contando indici da tempo. Questa è una pazzia. Ciao. La grafica lascerà un po a desiderare. Tutto questo è voluto. ';
// Con substr trova le parole nel paragrafo tramite il conto degli indici
// $firstSection = substr($paragraph, 0, 18);
// $secondSection = substr($paragraph, 18, 56);
// $thirdSection = substr($paragraph, 74, 30);
// $fourthSection = substr($paragraph, 104, 22);
// $fifthSection = substr($paragraph, 126, 7);
// $sixthSection = substr($paragraph, 132, 40);
// $seventhSection = substr($paragraph, 172, 25);

$smallText = explode(". ", $paragraph);
//  var_dump($smallText);

$firstSection = $smallText[0];
$secondSection = $smallText[1];
$thirdSection = $smallText[2];
$fourthSection = $smallText[3];
$fifthSection = $smallText[4];
$sixthSection = $smallText[5];
$seventhSection = $smallText[6];

// var_dump($firstSection, $secondSection);

// Con strpos trova le posizioni dei punti nel paragrafo
// $firstPoint = strpos($paragraph, '.');
// $secondPoint = strpos($paragraph, '.', $firstPoint + 1);
// $thirdPoint = strpos($paragraph, '.', $secondPoint + 1);
// $fourthPoint = strpos($paragraph, '.', $thirdPoint + 1);
// $fifthPoint = strpos($paragraph, '.', $fourthPoint + 1);
// $sixthPoint = strpos($paragraph, '.', $fifthPoint + 1);
// $seventhPoint = strpos($paragraph, '.', $sixthPoint + 1);

// // Suddivide il paragrafo in base ai punti trovati
// $firstSection = substr($paragraph, 0, $firstPoint + 1);
// $secondSection = substr($paragraph, $firstPoint + 2, $secondPoint - $firstPoint - 1);
// $thirdSection = substr($paragraph, $secondPoint + 2, $thirdPoint - $secondPoint - 1);
// $fourthSection = substr($paragraph, $thirdPoint + 2, $fourthPoint - $thirdPoint - 1);
// $fifthSection = substr($paragraph, $fourthPoint + 2, $fifthPoint - $fourthPoint - 1);
// $sixthSection = substr($paragraph, $fifthPoint + 2, $sixthPoint - $fifthPoint - 1);
// $seventhSection = substr($paragraph, $sixthPoint + 2);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link grity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style5.css">

    <script src="js/script.js" type="module"></script>
    <title>Php snack 5</title>

</head>

<!-- Snack 5
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo. | 55-60 -->

<body>
<h1 class="text-center text-primary text-uppercase border-bottom">Snack 5 - Boolean</h1>
    <div class="f-d-container">
        <div class="align-self-start">
            <h2 class="text-primary fs-5">Questo è il primo paragrafo</h2>
            <p class="text-primary f-d-size"><?php echo $firstSection ?></p>
        </div>
        <div class="align-self-end">
            <h2 class="text-secondary fs-5">Questo è il secondo paragrafo</h2>
            <p class="text-secondary f-d-size "><?php echo $secondSection ?></p>
        </div>
        <div class="align-self-start">
            <h2 class="text-danger fs-5">Questo è il terzo paragrafo</h2>
            <p class="text-danger f-d-size"><?php echo $thirdSection ?></p>
        </div>
        <div class="align-self-center">
            <h2 class="text-success fs-5">Questo è il quarto paragrafo</h2>
            <p class="text-success f-d-size"><?php echo $fourthSection?></p>
        </div>
        <div class="align-self-start">
            <h2 class="text-warning fs-5">Questo è il quinto paragrafo</h2>
            <p class="text-warning f-d-size"><?php echo $fifthSection ?></p>
        </div>
        <div class="align-self-center"> 
            <h2 class="text-info fs-5">Questo è il sesto paragrafo</h2>
            <p class="text-info f-d-size"><?php echo $sixthSection ?></p>
        </div>
        <div class="align-self-end">
            <h2 class="text-dark fs-5">Questo è il settimo paragrafo</h2>
            <p class="text-dark f-d-size"><?php echo $seventhSection ?></p>
        </div>
    </div>
</body>

</html>