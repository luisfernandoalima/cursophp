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
        <h1>Analisador de Número Real</h1>
    </header>
    <main>
      <?php 
        $valor = $_GET['numero'];
        $inteiro = (int) $valor;
        $fracao = $valor - $inteiro;
      ?>
        <p>Analisando o número <strong><?php echo $valor;?></strong> informado pelo usuário:</p>
        <ul>
          <li>A parte inteira o número é <strong><?php echo $inteiro?></strong></li>
          <li>A parte fracionada do número é <strong><?php echo $fracao?></strong></li>
        </ul>
        
        <p><a href="javascript:history.go(-1)">Voltar</a></p>
    </main>
</body>
</html>