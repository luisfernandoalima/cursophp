<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php 
            $numero = $_GET['numero'];
            $Antecessor = $numero - 1;
            $Sucessor = $numero + 1;
        ?>
        <p>O número escolhido foi <?php echo $numero;?></p>
        <p>O seu antecessor foi <?php echo $Antecessor;?></p>
        <p>O seu sucessor foi <?php echo $Sucessor;?></p>
        <p><a href="javascript:history.go(-1)">Voltar</a></p>
    </main>
</body>
</html>