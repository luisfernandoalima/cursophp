<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 5</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
        <h1>Analisador de Número Real</h1>
    </header>
    <section>
        <form action="calc.php" method="get">
            <label for="numero">Número real:</label>
            <input type="number" name="numero" id="idnumero" step="0.001">
            <br>
            <input type="submit" value="Analizar">
        </form>
    </section>
</body>
</html>