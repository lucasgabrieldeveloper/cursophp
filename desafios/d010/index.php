<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Máquina do Tempo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $anoNascimento = $_GET['nascimento'] ?? 1;
        $idadeAno = $_GET['idade'] ?? 1;

        $idadeEmQueAno = $idadeAno - $anoNascimento;
    ?>
    <main>
        <h1>Calculando a sua idade</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="nascimento">Em que ano você nasceu?</label>
            <input type="number" name="nascimento" id="idnascimento" min="1920" max="2025">
            <label for="idade">Quer saber sua idade em que ano? (atualmente estamos em <strong>2025</strong>)</label>
            <input type="number" name="idade" id="ididade">
            <input type="submit" value="Qual será minha idade?">
        </form>
    </main>
    <section>
        <h2>Resultado</h2>
        <p>Quem nasceu em <?= $anoNascimento ?> vai ter <strong><?= $idadeEmQueAno ?> anos</strong> em <?= $idadeAno ?>!</p>
    </section>
</body>
</html>