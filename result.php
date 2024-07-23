<?php

$paragrafo = $_GET['paragrafo'];
$parolaCen = $_GET['parolaCen'];

$testoLung = strlen($paragrafo);
$paragrafoCorretto = str_replace($parolaCen, '***', $paragrafo);
$testoLungParCorr = strlen($paragrafoCorretto);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleResult.css">
    <title>Risultato</title>
</head>
<body>
    <h1>Ecco il tuo Risultato</h1>
    
    <div>
        <p>Testo Originario: <?php echo $paragrafo ?></p>
        <span> il paragrafo e' lungo: <strong><?php echo $testoLung ?></strong></span>
    </div>
    <div>
        <p>Testo Modificato: <?php echo $paragrafoCorretto ?></p>
        <span> il paragrafo corretto e' lungo: <strong><?php echo $testoLungParCorr ?></strong></span>
    </div>
</body>
</html>