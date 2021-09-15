<?php
if(isset($_POST["btnresultado"])){
 $num1=$_POST["txtnumero1"];
 $num2=$_POST["txtnumero2"];
 $num3=$_POST["txtnumero3"];
 $prom=($num1+$num2+$num3)/3;
 echo $prom;
}
else{
    $prom="";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prom</title>
</head>
<body>
    <form action="promedio.php" method="post">
    <table>
        <tr>
            <td>
                Numero 1
            </td>
            <td>
                <input type="text" name="txtnumero1">
            </td>
        </tr>
        <tr>
            <td>
                Numero 2
            </td>
            <td>
                <input type="text" name="txtnumero2">
            </td>
        </tr>
        <tr>
            <td>
                Numero 3
            </td>
            <td>
                <input type="text" name="txtnumero3" id="">
            </td>
        </tr>
        <tr>
            <td><input type="submit"  name="btnresultado" value="Calcular"></td>
        </tr>
        <tr>
            <td>Resultado
            </td>
            <td>
                <?php echo $prom;?>
            </td>
        </tr>
    </table>
    </form>
</body>
</html>