<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Trabalhando com números aleatórios</h1>
        <p>
            <?php
            
            $num1 = $_GET["numero1"];
            $num2 = $_GET["numero2"];

            echo "Gerando um número aleatório entre "."<strong>".$num1."</strong>"." e "."<strong>".$num2."</strong>"."."."<br>";

            echo "O número sorteado foi "."<strong>".mt_rand($num1, $num2)."</strong>".".";
        
            ?>
        </p>
        <button onclick="document.location.reload()">&#128260;Gerar outro</button>
        <button onclick="javascript:window.location.href='index.html'">&#x2B05; Voltar</button>
    </main>
</body>
</html>