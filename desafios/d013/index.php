<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caixa Eletrônico</title>
    <link rel="stylesheet" href="style.css">
    <style>
        img.nota{
            height: 50px;
            margin: 5px;
        }
    </style>
</head>
<body>
    <?php 
        $valor = $_GET['dinheiro'] ?? '0';
        $sobra = $valor;

        $notas100 = floor($sobra / 100);
        $sobra %= 100;

        $notas50 = floor($sobra / 50);
        $sobra %= 50;

        $notas20 = floor($sobra / 20);
        $sobra %= 20;

        $notas10 = floor($sobra / 10);
        $sobra %= 10;

        $notas5 = floor($sobra / 5);
        $sobra %= 5;

        $notas2 = floor($sobra / 2);
        $sobra %= 2;

        $notas1 = floor($sobra / 1);

    ?>
    <main>
        <h1>Caixa Eletrônico</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="valor">Qual valor você deseja sacar? (R$)*</label>
            <input type="number" name="dinheiro" id="valor" min="5" max="50000" step="0.01" required value="<?= $valor ?>">
            <small>*Notas disponíveis: R$100.00, R$50.00, R$20.00, R$10.00, R$5.00, R$2.00 e R$1.00</small>
            <input type="submit" value="Sacar">
        </form>
    </main>
    <section>
        <h2>Saque de R$<?= number_format($valor, 2, ',', '.'); ?> realizado</h2>
        <p>O caixa eletrônico vai te entregar as seguintes notas:</p>
        <ul>
            <li><img src="img/100-reais.jpg" alt="100" class="nota"> x<?= $notas100 ?></li>
            <li><img src="img/50-reais.jpg" alt="50" class="nota"> x<?= $notas50 ?></li>
            <li><img src="img/20-reais.jpg" alt="20" class="nota"> x<?= $notas20 ?></li>
            <li><img src="img/10-reais.jpg" alt="10" class="nota"> x<?= $notas10 ?></li>
            <li><img src="img/5-reais.jpg" alt="5" class="nota"> x<?= $notas5 ?></li>
            <li><img src="img/2-reais.jpg" alt="2" class="nota"> x<?= $notas2 ?></li>
            <li><img src="img/1-real.jpg" alt="1" class="nota"> x<?= $notas1 ?></li>
        </ul>
    </section>
</body>
</html>