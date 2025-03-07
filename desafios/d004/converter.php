<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 4</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Conversor de moedas</h1>
        <?php 
            //captura do valor em R$ real
            $real = $_GET["numero"];
            
            //cotação do dólar em tempo real
            $inicio = date("m-d-Y", strtotime("-7 days"));
            $fim = date("m-d-Y");
        
            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'' . $inicio . '\'&@dataFinalCotacao=\'' . $fim . '\'&$top=1&$format=json&$select=cotacaoCompra,dataHoraCotacao';
        
            $dados = json_decode(file_get_contents($url), true);

            //armazenamento da cotação do dólar na variável $dólar
            $cotação = $dados["value"][0]["cotacaoCompra"];

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