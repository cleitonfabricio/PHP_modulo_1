<!DOCTYPE html>
<html lang="pr-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Resuldado Final</h1>
        <p>
            <?php 
                $n = $_GET["num"] ?? 0;
                $a = $n - 1;
                $s = $n + 1;
                echo "O número escolhido foi <strong>$n</strong>";
                echo "<br>O seu antecessor é <strong>$a</strong>";
                echo "<br>O seu sucessor é <strong>$s</strong>";

                // onclick="javascript:history.go(-1)"  
                //2º Maneira de voltar na página.

                // onclick="javascript:window.location.href='index.html'"  
                //1º Maneira de voltar na página. 
            ?>
        </p>
        <button onclick="javascript:window.location.href='index.html'">&#x2B05; Voltar</button>
    </main>
</body>
</html>