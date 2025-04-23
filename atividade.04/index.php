<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 4</title>
</head>
<body>    
    <form method="post">
        Qual o nome do vendendor?
        <input type="text" name="vendedor"><br>
        
        Qual o salário fixo?
        <input type="number" name="salariofixo"><br>

        Qual o total de vendas?
        <input type="number" name="vendastotal"><br>

        <input type="submit" value="Enviar">
    </form>

    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $valor1 =  $_POST["vendedor"];
            $valor2 =  $_POST["salariofixo"];
            $valor3 =  $_POST["vendastotal"];

            $totalcomissao = $valor3 * 0.15;  
            $salariofinal = $valor2 + $totalcomissao;
            echo "Salário final: $salariofinal <br>";
        }
    ?>
</body>
</html>