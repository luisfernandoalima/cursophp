<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 4</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
        <h1>Conversor de moedas v2.0</h1>
    </header>
    <section>
        <form action="calc.php" method="get">
            <label for="numero">Quantos R$ você tem na carteira?</label>
            <input type="number" name="numero" id="idnumero" step="0.01">
            <br>
            <input type="submit" value="Converter">
        </form>
    </section>
</body>
</html>