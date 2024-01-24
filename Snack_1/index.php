<!-- ## Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55-60 -->
<?php
$matches = [
    [
        'home_team' => 'Olimpia Milano',
        'away_team' => 'Cantù',
        'home_team_points' => '55',
        'away_team_points' => '60'
    ],
    [
        'home_team' => 'Brindisi',
        'away_team' => 'Napoli Basket',
        'home_team_points' => '77',
        'away_team_points' => '80'
    ],
    [
        'home_team' => 'Treviso Basket',
        'away_team' => 'Sassari',
        'home_team_points' => '77',
        'away_team_points' => '70'
    ],
    [
        'home_team' => 'Varese',
        'away_team' => 'Virtus Bologna',
        'home_team_points' => '69',
        'away_team_points' => '81'
    ]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partite di basket</title>
</head>

<body>
    <h1>Partite della 17^ giornata</h1>
    <ul>
        <?php foreach ($matches as $match) { ?>
            <li>
                <?php echo $match['home_team'] . ' - ' . $match['away_team'] . ' | ' . $match['home_team_points'] . '-' . $match['away_team_points']; ?>
            </li>
        <?php } ?>
    </ul>
</body>

</html>