<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 5</title>
</head>
<body>
        <form method="post">
        Qual o nome do aluno?
        <input type="text" name="nomealuno"><br>

        Qual a primeira nota?
        <input type="number" name="nota1"><br>
        
        Qual a segunda nota?
        <input type="number" name="nota2"><br>

        Qual a terceira nota?
        <input type="number" name="nota3"><br>

        <input type="submit" value="Enviar">
    </form>

    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $nomealuno = $_POST["nomealuno"];
            $nota1 =  $_POST["nota1"];
            $nota2 =  $_POST["nota2"];
            $nota3 =  $_POST["nota3"];

    
            $media = ($nota1 + $nota2 + $nota3) / 3;
            echo "A média do aluno $nomealuno é $media <br>";
}
    ?>
</body>
</html>