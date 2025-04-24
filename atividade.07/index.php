<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 7</title>
</head>
<body>
    <form method="post">
        Qual a temperatura em Celcius?
        <input type="text" name="temp_celcius"><br>
    
        <input type="submit" value="Enviar">
    </form>

    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $TemperaturaCelsius =  $_POST["temp_celcius"];

        $Tempconvertida = (9*$TemperaturaCelsius+160) / 5;
        echo "Temperatura em Fahrenheit: $Tempconvertida <br>";
        }
    ?>
</body>
</html>