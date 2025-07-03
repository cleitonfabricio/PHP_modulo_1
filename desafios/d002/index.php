<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP003</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Gerador de números aleatorio</h1>
        <?php 
            $min = 0;
            $max = 100;
            $num = mt_rand($min, $max);
            echo "<p>Gerando um número aleatório entre <strong>$min</strong> e <strong>$max...</strong> 
            <br><br>O valor gerado foi <strong>$num</strong></p>"

            // onclick="javascript:document.location.reload()" botao de reload na página
        ?>
        <button onclick="javascript:document.location.reload()"><input type="submit" value="Gerar outro"></button>
    </main>
</body>
</html>