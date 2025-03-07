<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 5</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Analisador de número real</h1>
        <p>
            <?php
            
            $real = $_POST["numero1"] ?? 0; 
            
            echo "<p>Analisando o número " . "<strong>" . number_format($real, 3, ",", ".") . "</strong>" . " informado pelo usuário</p>";

            $int = (int) $real;
            $fra = $real - $int;   

            echo "<ul><li> A parte inteira do número é <strong>" . number_format($int, 0, ",", ".") . "</strong></li>";

            echo "<li> A parte decimal do número é <strong>" . number_format($fra, 3, ",", ".") . "</strong></li></ul>";

            ?>
        </p>
        <button onclick="javascript:window.location.href='index.html'">&#x2B05; Voltar</button>
    </main>
</body>
</html>