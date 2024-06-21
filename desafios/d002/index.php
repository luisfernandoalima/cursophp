<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Trabalhando com números aleatórios</h1>
    </header>
    <section>
        <p>Gerando um número aleatório entre 0 e 100...</p>
        <p>O valor gerado foi: <?php echo rand(0,100);?></p>
       <a href="javascript:window.location.reload()"><button>Gerar outro</button></a>
    </section>
</body>
</html>