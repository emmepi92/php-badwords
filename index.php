<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>
    <?php
    $paragrafo = '<p>Apelle, figlio di Apollo fece una palla di pelle di pollo. Tutti i pesci vennero a galla, per vedere la palla di pelle di pollo fatta da Apelle, figlio di Apollo.</p>';

    echo $paragrafo;

    $parolaCensurata = $_GET['parola'];


    $paragrafo = str_replace('palla', '***', $paragrafo);

    echo $paragrafo
    ?>
    
</body>
</html>