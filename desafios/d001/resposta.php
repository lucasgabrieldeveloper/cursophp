<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Resultado Final</h1>
        <?php 
        
            $num = $_GET["numero"];

            $ant = $num - 1;
            $suc = $num + 1;

            echo "O número escolhido foi " . "<strong>" . $num . "</strong>" . "<br>";

            echo "O seu <em>antecessor</em> é " . "<strong>" . $ant . "</strong>" . "<br>";

            echo "O seu <em>sucessor</em> é " . "<strong>" . $suc . "</strong>" . "<br>";

        ?>
        <button onclick="javascript:window.location.href='index.html'">&#x2B05; Voltar</button>
    </main>
    
</body>
</html> 