<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suma de 2 numeros</title>
</head>
<body>
    <form action="suma.php" method="post">
        <h1>Suma de 2 numeros </h1>
        <p>Numero 1 </p>
        <input type="text" name="num1">
        <p>Numero 2</p>
        <input type="text" name="num2">
        <input type="submit" name="enviar" value="enviar">
    </form>
   
</body>
</html>
<?php
        if($_POST){
            $num1=$_POST["num1"];
            $num2=$_POST["num2"];
            $resultado=$num1+$num2;
            echo "Resultado".$resultado;
        }
    ?>