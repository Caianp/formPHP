<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Média</title>
</head>
<body>
    <h1>Calculadora de Média</h1>
    <form method="POST" action="">
        <label for="nome">Nome do Aluno:</label>
        <input type="text" name="nome" id="nome" required><br><br>

        <label for="nota1">Nota 1:</label>
        <input type="text" name="nota1" id="nota1" required><br><br>

        <label for="nota2">Nota 2:</label>
        <input type="text" name="nota2" id="nota2" required><br><br>

        <input type="submit" value="Calcular Média">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST["nome"];
        $nota1 = $_POST["nota1"];
        $nota2 = $_POST["nota2"];

        
        $nota1 = str_replace(",", ".", $nota1);
        $nota2 = str_replace(",", ".", $nota2);

       
        $media = ($nota1 + $nota2) / 2;

        echo "<h2>Nome do Aluno: $nome</h2>";
        echo "<h2>Média: $media</h2>";

        if ($media < 4.0) {
            echo "<p>Situação: Reprovado</p>";
        } elseif ($media >= 4.0 && $media < 6.0) {
            echo "<p>Situação: Exame final</p>";
        } else {
            echo "<p>Situação: Aprovado</p>";
        }
    }
    ?>
</body>
</html>
