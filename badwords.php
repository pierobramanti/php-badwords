<?php
$paragrafo = $_GET['paragrafo']; 
$badWord = $_GET['badWord']; 
$length = strlen($paragrafo); 
$replacement = '***'; 
$censored = str_replace($badWord, $replacement, $badWord ); 
$lenght_censored = strlen($badWord);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Your Results</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-4 border">
                <h3>Paragrafo</h3>
                <p>Il testo da te digitato è: <?php echo $paragrafo; ?></p>
                <p>La lunghezza del tuo paragrafo è: <?php echo $length; ?></p>
            </div>
            <div class="col-4 border">
                <h3>Censura</h3>
                <p>Ecco la tua parola censurata: <?php echo $censored; ?></p>
                <p> La lunghezza dellla tua parola censurata è: <?php echo $lenght_censored?> </p>
            </div>
        </div>
    </div>
</body>
</html>
