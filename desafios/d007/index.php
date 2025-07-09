<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Infome seu Salario</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <?php 
            $mini = 1_518.00;
            $salario = $_GET['sal'] ?? $mini;
        ?>
        <h1>Informe seu Salário</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="sal">Salário (R$)</label>
            <input type="number" name="sal" id="sal" value="<?=$salario?>" step="0.01">
            <p>Considerando o salário mínimo de <strong>R$<?=number_format($mini, 2, ",", ".")?></strong>*</p>
            <input type="submit" value="Calcular">
        </form>

    </main>

    <section>
        <h2>Resultado Final</h2>
        <?php 
            $tot = intdiv($salario, $mini);
            $dif = $salario % $mini;

            echo "<p>Quem recebe um salário de R\$". number_format($salario, 2, ",", ".")." ganha <strong>$tot salários mínimos + R\$". number_format($dif, 2, ",", "."). "</strong>.</p>";
        ?>

    </section>
</body>

</html>