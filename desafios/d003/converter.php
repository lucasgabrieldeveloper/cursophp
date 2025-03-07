<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 3</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Conversor de moedas</h1>
        <?php 
            //captura do valor em R$ real
            $real = $_GET["numero"];
            
            //cotação do dólar em tempo real
            $dados = json_decode(file_get_contents("https://economia.awesomeapi.com.br/json/last/USD-BRL"), true);

            //armazenamento da cotação do dólar na variável $dólar
            $cotação = $dados["USDBRL"]["bid"];

            //conversão do R$ real para o US$ dólar
            $dólar = $real / $cotação;

            //exibição do resultado
            $padrão = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

        echo "Seus " . "<strong>" . numfmt_format_currency($padrão, $real, "BRL") . "</strong>" . " equivalem a " . "<strong>" . numfmt_format_currency($padrão, $dólar, "USD") . "</strong>";

        ?>
        <button onclick="javascript:document.location.href='index.html'">&#x2B05; Voltar</button>
    </main>
    
</body>
</html> 