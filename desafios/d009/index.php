<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Media Aritmética e Ponderada PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Média Aritmética</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="v1">1º Valor:</label>
            <input type="number" name="v1" id="v1" required>
            <label for="p1">1º peso:</label>
            <input type="number" name="p1" id="p1" min="1" required>
            <label for="v2">2º Valor:</label>
            <input type="number" name="v2" id="v2" required>
            <label for="p2">2º peso:</label>
            <input type="number" name="p2" id="p2" min="1" required>
            <input type="submit" value="Calcular Médias">
        </form>
    </main>

    <section>
        <h2>Cálculo das Médias</h2>
        <p>Analisando os valores {} e {}:</p>
        <ul>

        </ul>
    </section>
</body>
</html>