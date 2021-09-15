<?php
if(isset($_POST["btnres"])){
$lado=$_POST["txtlado"];
$perimetro=$lado*4;
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
    <title>Document</title>
</head>
<body>
    <form action="perimetrocuadrado.php" method="post">
        <table>
            <tr>
                <td>
                    Ingresa el lado del cuadrado
                </td>
                <td>
                    <input type="text" name="txtlado" >
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="btnres" value="calcular">
                </td>
            </tr>
            <tr>
                <td>
                    Resultado
                </td>
                <td><?php
                 echo $perimetro;
                ?></td>
            </tr>
        </table>
    </form>
</body>
</html>