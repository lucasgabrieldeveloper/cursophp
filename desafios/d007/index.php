<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salário mínimo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $salario = $_GET['salario'] ?? 0;
        $salarioMinimo = 1518;

        $resultado = intdiv($salario, $salarioMinimo);
        $resto = $salario % $salarioMinimo;
    ?>
    <main>
        <h1>Informe seu salário</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="salario">Salário(R$)</label>
            <input type="number" name="salario" id="idsalario" value="<?= $salario ?>">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Resultado Final</h2>
        <?= "Quem recebe um salário de R$" . number_format($salario, 2, ',', '.') . " ganha <strong>$resultado salários mínimos</ strong> + R$" . number_format($resto, 2, ',', '.') . "."?>
    </section>
</body>
</html>  