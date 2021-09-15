<?php
if(isset($_POST["btnresultado"])){
$num1=$_POST["txtnum1"];
$perimetro=2*$num1*3.1415;
}
else{
    $perimetro="";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perimetro circulo</title>
</head>
<body>
    <form action="perimetrocirculo.php" method="post">
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
                <?php echo $perimetro;?>
            </td>
        </tr>
        </table>
    </form>
</body>
</html>