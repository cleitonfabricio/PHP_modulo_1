<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio Caixa Eletronico</title>
    <link rel="stylesheet" href="style.css">
    <style>
        img.nota {
            height: 45px;
            margin: 5px;
        }
    </style>
</head>
<body>
    <?php
        $saque = $_REQUEST['saque'] ?? 0;
    ?>

    <main>
        <h1>Caixa Eletrônico</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="saque">Qual valor você deseja sacar? (R$) <sup>*</sup></label>
            <input type="number" name="saque" id="saque" step="5" required value="<?=$saque?>">
            <p style="font-size: 0.7em;"><sup>*</sup>Notas disponíveis: R$100,00 / R$50,00 / R$20,00 / R$10,00 e R$5,00</p>

            <input type="submit" value="Sacar">
        </form>
    </main>

    <?php 
        $resto = $saque;
        // saque de R$100
        $tot100 = floor($resto / 100);
        $resto %= 100;
        // saque de R$50
        $tot50 = floor($resto / 50);
        $resto %= 50;
        // saque de R$20
        $tot20 = floor($resto / 20);
        $resto %= 20;
        // saque de R$10
        $tot10 = floor($resto / 10);
        $resto %= 10;
        // saque de R$5
        $tot5 = floor($resto / 5);
        $resto %= 5;
    ?>

    <section>
        <h2>Saque de R$<?=number_format($saque, 2, ",", ".")?> realizado</h2>
        <p>O caixa eletrônico vai te entregar as seguintes notas:</p>
        <ul>
            <li><img src="imagens/100-reais.jpg" alt="Notas de 100" class="nota"><strong>X <?=$tot100?></strong></li>
            <li><img src="imagens/50-reais.jpg" alt="Notas de 50" class="nota"><strong>X <?=$tot50?></strong></li>
            <li><img src="imagens/20-reais.jpg" alt="Notas de 20" class="nota"><strong>X <?=$tot20?></strong></li>
            <li><img src="imagens/10-reais.jpg" alt="Notas de 10" class="nota"><strong>X <?=$tot10?></strong></li>
            <li><img src="imagens/5-reais.jpg" alt="Notas de 5" class="nota"><strong>X <?=$tot5?></strong></li>
        </ul>
    </section>
</body>
</html>