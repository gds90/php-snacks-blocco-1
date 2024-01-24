<!-- ## Snack 3
Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post.
Qui l’array di esempio: https://www.codepile.net/pile/R2K5d68z -->

<?php
$posts = [
    '21-07-2023' => [
        [
            'title' => 'Giornata al mare',
            'author' => 'Fabio Aranzulla',
            'text' => 'Che mare oggi! Ci voleva una giornata di relax.'
        ],
        [
            'title' => 'Aperitivo in compagnia',
            'author' => 'Silvia Forti',
            'text' => 'Fantastico aperitivo tra amiche, mi mancavate!'
        ],
    ],
    '13-08-2023' => [
        [
            'title' => 'Tanti auguri a me',
            'author' => 'Michela Bianchi',
            'text' => 'Oggi è il mio compleanno, stasera si va a ballare!'
        ],
        [
            'title' => 'Macchina nuova',
            'author' => 'Alberto Barbagiovanni',
            'text' => 'Grande acquisto, vi presento il mio nuovo gioiellino.'
        ],
        [
            'title' => 'Benvenuta Federica',
            'author' => 'Giulia Casini',
            'text' => 'Finalmente è nata Federica, ben arrivata tesoro!'
        ],
    ],
    '16-09-2023' => [
        [
            'title' => 'Si avvicina l\'autunno',
            'author' => 'Vincenzo Fusco',
            'text' => 'Dove sono finite le belle giornate? Basta pioggia!!'
        ],
        [
            'title' => 'Esame finale del corso',
            'author' => 'Luigi Rossi',
            'text' => 'Domani rush finale, finalmente avrò quell\'attestato.'
        ]
    ]
]
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>
</head>

<body>
    <h1>Post divisi per data:</h1>
    <ul>
        <!-- ciclo l'array posts e assegno la chiave della data alla variabile $date, e i valori della chiave alla variabile $postsInDate -->
        <?php foreach ($posts as $date => $postsInDate) { ?>
            <!-- stampo le date dei post  -->
            <?php echo "<h2>Data: $date</h2>"; ?>

            <!-- per ogni data, stampo i post contenuti nell'array  -->
            <?php foreach ($postsInDate as $post) { ?>
                <li>
                    <?php echo "<h3>{$post['title']}</h3>";
                    echo "<p>Autore: {$post['author']}</p>";
                    echo "<p>{$post['text']}</p>";
                    echo "<hr>"; ?>
                </li>
            <?php } ?>
        <?php } ?>
    </ul>
</body>

</html>