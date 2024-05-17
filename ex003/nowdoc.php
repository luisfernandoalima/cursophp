<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nowdoc</title>
</head>
<body>
    <?php 
        $texto = "Nowdoc";

        echo <<< 'FRASE'
            <h1>O texto aqui é Nowdoc</h1>
            <p>O texto não é interpretado: $texto</p>
        FRASE;
    ?>
</body>
</html>