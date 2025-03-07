<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos php</title>
</head>
<body>
    <h1>Teste de tipos primitivos</h1>
    <?php 
        // 0x = hexadecimal 0b = binário 0 = Octal
        // $num = 010;
        // echo "O valor da variável é $num ";

        // $v = "Lucas";
        // var_dump($v);

        // $num = (integer) 3e2; // é o mesmo que 3 x 10^2 (integer >> COERSÃO)
        // echo "O valor é $num";
        // var_dump( $num );

        // $num = (float) "950";
        // var_dump($num);

        // $casado = true;
        // var_dump( $casado );
        // echo "O valor para casado é $casado";

        // $vet = [1, 2, 3, 4, 5, 6 ,7, 8, 9, 10, "Maria", 11.5, true];
        // var_dump($vet);

        class Pessoa {
            private string $nome;
        }

        $p = new Pessoa;
        var_dump($p);
    ?>
</body>
</html>