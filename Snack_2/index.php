<!-- ## Snack 2
Con un form passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php
// verifico che i campi del form siano stati compilati
if (isset($_GET['name']) && isset($_GET['email']) && isset($_GET['age'])) {

    // assegno i valori dei campi del form alle variabili
    $name = $_GET['name'];
    $email = $_GET['email'];
    $age = $_GET['age'];

    // verifico che name sia più lungo di 3 caratteri, che la mail sia un indirizzo email valido e che l'età inserita sia un valore numeri
    if (strlen($name) > 3 && filter_var($email, FILTER_VALIDATE_EMAIL) && is_numeric($age)) {
        // se le condizioni sono soddisfatte mostro "Accesso riuscito"
        echo "Accesso riuscito";
    } else {
        // altrimenti mostro "Accesso negato"
        echo "Accesso negato";
    }
} else {
    echo "Inserisci i tuoi dati:";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log-in Form</title>
</head>

<body>
    <form action="index.php" method="GET">
        <label for="name">Inserisci il tuo nome:</label>
        <input type="text" name="name" placeholder="Nome" required>
        <label for="email">Inserisci il tuo indirizzo email:</label>
        <input type="email" name="email" placeholder="Indirizzo email" required>
        <label for="age">Inserisci la tua età:</label>
        <input type="text" name="age" placeholder="Età" required>
        <button type="submit">Invia </button>
    </form>
</body>

</html>