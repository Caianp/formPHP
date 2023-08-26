<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de IMC</title>
</head>
<body>
    <h1>Calculadora de IMC</h1>
    <form method="POST" action="">
        <label for="peso">Peso (kg):</label>
        <input type="text" name="peso" id="peso" required><br><br>

        <label for="altura">Altura (metros):</label>
        <input type="text" name="altura" id="altura" required><br><br>

        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $peso = str_replace(",", ".", $_POST["peso"]);
        $altura = str_replace(",", ".", $_POST["altura"]);

        $imc = $peso / ($altura * $altura);

        echo "<h2>Seu IMC é: $imc</h2>";

        if ($imc < 17) {
            echo "<p>Situação: Muito abaixo do peso</p>";
        } elseif ($imc >= 17 && $imc < 18.5) {
            echo "<p>Situação: Abaixo do peso</p>";
        } elseif ($imc >= 18.5 && $imc < 25) {
            echo "<p>Situação: Peso normal</p>";
        } elseif ($imc >= 25 && $imc < 30) {
            echo "<p>Situação: Acima do peso</p>";
        } elseif ($imc >= 30 && $imc < 35) {
            echo "<p>Situação: Obesidade grau 1</p>";
        } elseif ($imc >= 35 && $imc < 40) {
            echo "<p>Situação: Obesidade grau 2 (severa)</p>";
        } else {
            echo "<p>Situação: Obesidade grau 3 (mórbida)</p>";
        }
    }
    ?>
</body>
</html>
