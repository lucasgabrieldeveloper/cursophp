<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado do Processamento</h1>
    </header>
    <main>
        <?php 
            $nome = $_GET["nome"] ?? "\"Nome não foi definido\"";
            $sobrenome = $_GET["sobrenome"] ?? "\"Sobrenome não foi definido\"";

            echo "É um prazer te conhecer, <strong>$nome $sobrenome</strong>! Este é o seu site ";
        ?>
    </main>
    <P><a href="javascript:history.go(-1)">Voltar</a></P>
</body>
</html>