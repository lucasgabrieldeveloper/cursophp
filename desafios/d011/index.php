<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reajustar Preços</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $precoProduto = $_REQUEST['preco'] ?? '0';
        $percentual = $_REQUEST['percentual'] ?? '0';

        $formula = ($precoProduto * $percentual) / 100;
        $precoReajustado = $formula + $precoProduto;
    ?>
    <main>
        <h1>Reajustador de Preços</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="produto">Preço do Produto (R$)</label>
            <input type="number" name="preco" id="idpreco" value="<?= $precoProduto ?>" min="0.10" step="0.01">
            <label for="percentual">Qual será o percentual de reajuste? (<strong><span id="p">?</span>%</strong>)</label>
            <input type="range" name="percentual" id="percentual" min="0" max="100" value="<?= $percentual ?>" step="1" oninput="mudaValor()">
            <input type="submit" value="Reajustar">
        </form>
    </main>
    <section>
        <h2>Resultado do Reajuste</h2>
        <p>O produto que custava R$<?= number_format($precoProduto, 2, ',', '.') ?> com <strong><?= $percentual ?>% de aumento</strong> vai passar a custar <strong>R$<?= number_format($precoReajustado, 2, ',', '.') ?></strong> a partir de agora.</p>
    </section>
    <script>
        // Declarações automáticas
        mudaValor()

        function mudaValor() {
            p.innerText = percentual.value
        }
    </script>
</body>
</html>