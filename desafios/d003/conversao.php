<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Conversor de Moedas</h1>
        <?php 
            // Cotação do Google
            $cotacao = 5.89;

            // Quanto $$ você tem?
            $real = $_REQUEST["din"] ?? 0;

            // Equivalência em Dólar
            $dolar = $real / $cotacao;

            // Mostra o resultado
            // echo "Seus R\$" . number_format($real, 2 ",", "."). " equivalem a US\$" . number_formar($dolar, 2, ",", ".");

            // Formatação de moedas com internacionalização!
            // Biblioteca intl (Internallization PHP)

            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

            echo "<p>Seu " . numfmt_format_currency($padrao, $real, "BRL"). " é equivalem a <strong>" . numfmt_format_currency($padrao, $dolar, "USD") . "</strong></p>";
        ?>
        <button onclick="javascript:history.go(-1)">&#x2B05; Voltar</button>
    </main>
</body>
</html>