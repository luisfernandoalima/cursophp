<?php 
  $inicio = date("m-d-Y", strtotime("-7 days"));
  $fim= date("m-d-Y");


  $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$inicio.'\'&@dataFinalCotacao=\''.$fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

  $dados = json_decode(file_get_contents($url), true);

$cotação = $dados["value"][0]["cotacaoCompra"];
?>

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
        <h1>Conversor de moedas v1.0</h1>
    </header>
    <main>
      <?php 
        $valor = $_GET['numero'];

        $valorDolar = number_format($valor / $cotação,2);
      ?>
        <p>Seus R$<?php echo $valor;?> equivalem a US$<?php echo $valorDolar?> </p>
        <p>Cotação obtida diretamente do <strong>banco central</strong></p>
        <p><a href="javascript:history.go(-1)">Voltar</a></p>
    </main>
</body>
</html>