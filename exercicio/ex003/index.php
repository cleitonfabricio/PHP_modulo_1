<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos em PHP</title>
</head>
<body>
    <h1>Teste de tipo primitivos</h1>
    <?php 
        // 0x = hexadecimal /0b = binário /0 = Octal
        // $num = 0x1A;
        // echo "O valor da variável é $num";

        // $v = Cleiton;
        // var_dump($v);

        // $num = (integer) 5e3;  // "Coerção"
        // echo "O valor é $num ";
        // var_dump($num);

        // $vet = [6, 2.5, "Maria", 3, false]; "Array"
        // var_dump($vet)

        class pessoa {
            private string $nome;
        }
        $p = new pessoa;
        var_dump($p)   // Object string

    ?>
</body>
</html>