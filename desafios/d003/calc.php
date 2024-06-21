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
        <h1>Conversor de moedas 1.0</h1>
    </header>
    <main>
      <?php 
        $valor = $_GET['numero'];

        $valorDolar = number_format($valor / 5.44,2);
      ?>
        <p>Seus R$<?php echo $valor;?> equivalem a US$<?php echo $valorDolar?> </p>
        <p>Cotação fixa de R$5,44 informada diretamente no código</p>
        <p><a href="javascript:history.go(-1)">Voltar</a></p>
    </main>
</body>
</html>