<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Médias Aritméticas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $primeiroValor = $_GET['valor1'] ?? 1;
        $primeiroPeso = $_GET['peso1'] ?? 1;
        $segundoValor = $_GET['valor2'] ?? 1;
        $segundoPeso = $_GET['peso2'] ?? 1;

        $M = ($primeiroValor + $segundoValor) / 2;
        $Mp = ($primeiroValor * $primeiroPeso + $segundoValor * $segundoPeso) / ($primeiroPeso + $segundoPeso);
    ?>
    <main>
        <h1>Médias Aritméticas</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="valor1">1° Valor</label>
            <input type="number" name="valor1" id="idvalor1" value="<?= $primeiroValor ?>">

            <label for="peso1">1° Peso</label>
            <input type="number" name="peso1" id="idpeso1" value="<?= $primeiroPeso ?>">

            <label for="valor2">2° Valor</label>
            <input type="number" name="valor2" id="idvalor2" value="<?= $segundoValor ?>">

            <label for="peso2">2° Peso</label>
            <input type="number" name="peso2" id="idpeso2" value="<?= $segundoPeso ?>">

            <input type="submit" value="Calcular Médias">
        </form>
    </main>
    <section>
        <h2>Cálculo das Médias</h2>
        <?= "<p>Analisando os valores $primeiroValor e $segundoValor</p>" ?>
        <ul>
            <li>A <strong>Média Aritmética Simples</strong> entre os valores é igual a <strong><?= number_format($M, 2, ',', '.') ?></strong>.</li>
            <li>A <strong>Média Aritmética Ponderada</strong> com pesos <?= $primeiroPeso ?> e <?= $segundoPeso ?> é igual a <strong><?= number_format($Mp, 2, ',', '.') ?></strong>.</li>
        </ul>
    </section>
</body>
</html>