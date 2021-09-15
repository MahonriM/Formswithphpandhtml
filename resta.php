<?php
if(isset($_POST["btnresultado"])){
 $num1=$_POST["txtnumero1"];
 $num2=$_POST["txtnumero2"];
 $resta=$num1-$num2;
 echo $resta;
}
else{
    $resta="";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resta</title>
</head>
<body>
    <form action="resta.php" method="post">
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
            <td><input type="submit"  name="btnresultado" value="Calcular"></td>
        </tr>
        <tr>
            <td>Resultado
            </td>
            <td>
                <?php echo $resta;?>
            </td>
        </tr>
    </table>
    </form>
</body>
</html>