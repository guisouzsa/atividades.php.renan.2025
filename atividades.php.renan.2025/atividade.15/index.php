<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 15</title>
</head>
<body>
    <form method="post">
        Me dê um valor, por gentileza: <input type="text" name="intervalo"><br>
    <input type="submit" value="Enviar">
    </form>
 <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $valor1 = $_POST["intervalo"];

        if($valor1 > 100 and $valor1 < 200){
           echo "o número $valor1 está entre 100 e 200";
        }
        else{
            echo "NÃO ESTÁ NO INTERVALO";
        }
    }
    ?>
</body>
</html>