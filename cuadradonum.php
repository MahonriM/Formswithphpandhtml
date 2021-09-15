<?php
if(isset($_POST["btnresultado"])){
 $num1=$_POST["txtnumero1"];

 $cuadrado=$num1**2;
 
}
else{
    $cuadrado="";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuadrado de un numero</title>
</head>
<body>
    <form action="cuadradonum.php" method="post">
    <table>
        <tr>
            <td>
                Ingresa el numero
            </td>
            <td>
                <input type="text" name="txtnumero1">
            </td>
        </tr>
        <tr>
            <td><input type="submit"  name="btnresultado" value="Calcular"></td>
        </tr>
        <tr>
            <td>Resultado
            </td>
            <td>
                <?php echo $cuadrado;?>
            </td>
        </tr>
    </table>
    </form>
</body>
</html>