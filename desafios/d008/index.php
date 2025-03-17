<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raízes</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $numero = $_GET['numero'] ?? 1;
        $raizQuadrada = sqrt($numero);
        $raizCubica = $numero**(1/3);
    ?>
    <main>
        <h1>Informe um número</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="numero">Número</label>
            <input type="number" name="numero" id="idnumero" value="<?= $numero ?>">
            <input type="submit" value="Calcular Raízes">
        </form>
    </main>
    <section>
        <h2>Resultado Final</h2>
        <?= "<p>Analizando o <strong>número $numero</strong>, temos:</p>" ?>
        <ul>
            <li>A sua raís quadrada é <strong><?= number_format($raizQuadrada, 3, ',', '.') ?></strong>.</li>
            <li>A sua raíz cúbica é <strong><?= number_format($raizCubica, 3, ',', '.') ?></strong>.</li>
        </ul>
    </section>
</body>
</html>