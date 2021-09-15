<?php
if(isset($_POST["btnresultado"])){
$num1=$_POST["txtnum1"];
$aerea=($num1**2)*3.1415;
}
else{
    $aerea="";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aerea circulo</title>
</head>
<body>
    <form action="aereacirculo.php" method="post">
        <table>
            <td>
                <tr>Ingresa el radio</tr>
                <tr><input type="text" name="txtnum1" ></tr>
            </td>
            <tr>
        <tr>
            <td><input type="submit"  name="btnresultado" value="Calcular"></td>
        </tr>
        <tr>
            <td>Aerea circulo
            </td>
            <td>
                <?php echo $aerea;?>
            </td>
        </tr>
        </table>
    </form>
</body>
</html>