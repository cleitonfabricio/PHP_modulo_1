<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste de string</title>
</head>
<body>
    <h1>Testando as Strings</h1>
    <?php 
        $canal = "Curso em Vídeo";
        $ano = date('Y');
         echo <<< TESTE
            Olá galera do $canal! <br>
            Tudo bem com vocês? <br>
            Como está sendo esse ano de $ano? <br>
            Abraços! \u{1F596}
         TESTE;
    ?>
</body>
</html>