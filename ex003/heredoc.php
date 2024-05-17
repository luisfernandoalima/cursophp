<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Heredoc</title>
</head>
<body>
    <?php 
        $texto = "Heredoc";

        echo <<< FRASE
            <h1>O texto aqui é Heredoc</h1>
            <p>O texto é interpretado: $texto</p>
        FRASE;
    ?>
</body>
</html>