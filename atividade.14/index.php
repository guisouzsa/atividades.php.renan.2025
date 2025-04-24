<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividades 14</title>
</head>
<body>
    <form method="post">
        Me diga um número:
        <input type="text" name="number1"><br>
        Me diga outro número:
        <input type="text" name="number2"><br>
        <input type="submit" value="Enviar">
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $valor1 = $_POST["number1"];
        $valor2 = $_POST["number2"];

        if ($valor1 > $valor2) {
            echo "$valor1 é maior que $valor2";
        } elseif ($valor1 < $valor2) {
            echo "$valor2 é maior que $valor1";
        }else {
            echo "Os dois números são iguais";
    }
}
    ?>

</body>
</html>