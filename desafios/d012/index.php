<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de tempo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $valor = $_GET['segundos'] ?? '0';
        //total de semanas
        $semanas = intdiv($valor, 604_800);
        $restoDivSem = $valor % 604_800;
        //total de dias
        $dias = intdiv($restoDivSem, 86_400);
        $restoDivDia = $restoDivSem % 86_400;
        //total de horas
        $horas = intdiv($restoDivDia, 3_600);
        $restoDivHr = $restoDivDia % 3_600;
        //total de minutos
        $minutos= intdiv($restoDivHr, 60);
        //total de segundos
        $segundos = $restoDivHr % 60;

    ?>
    <main>
        <h1>Calculadora de Tempo</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="seg">Qual é o total de segundos?</label>
            <input type="number" name="segundos" id="seg" value="<?= $valor ?>" required step="1" min="0">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Totalizando tudo</h2>
        <p>Analisando o valor que você digitou, <strong><?= number_format($valor, 2, ',', '.') ?> segundos</strong> equivalem a um total de:</p>
        <ul>
            <li><?= $semanas ?> semanas.</li>
            <li><?= $dias ?> dias.</li>
            <li><?= $horas ?> horas.</li>
            <li><?= $minutos ?> minutos.</li>
            <li><?= $segundos ?> segundos.</li>
        </ul>
    </section>
</body>
</html>