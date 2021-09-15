<?php
if(isset($_POST["btnresultado"])){
$num1=$_POST["txtnum1"];
$num2=$_POST["txtnumero2"];
$mul=$num1*$num2;
}
else{
    $mul="";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplicacion</title>
</head>
<body>
    <form action="multiplicacion.php" method="post">
        <table>
            <td>
                <tr>Numero 1</tr>
                <tr><input type="text" name="txtnum1" ></tr>
            </td>
            <tr>
            <td>
                Numero 2
            </td>
            <td>
                <input type="text" name="txtnumero2">
            </td>
        </tr>
        <tr>
            <td><input type="submit"  name="btnresultado" value="Calcular"></td>
        </tr>
        <tr>
            <td>Resultado
            </td>
            <td>
                <?php echo $mul;?>
            </td>
        </tr>
        </table>
    </form>
</body>
</html>