<?php
if(isset($_POST["btnres"])){
$lado=$_POST["txtbase"];
$altura=$_POST["txtaltura"];
$aerea=$lado*$altura/2;
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
    <title>Document</title>
</head>
<body>
    <form action="aereatriangulo.php" method="post">
        <table>
            <tr>
                <td>
                    Ingresa la base
                </td>
                <td>
                    <input type="text" name="txtbase" >
                </td>
            </tr>
            <tr>
                <td>
                    Ingresa la altura
                </td>
                <td>
                    <input type="text" name="txtaltura" >
                </td>
            </tr>

            <tr>
                <td>
                    <input type="submit" name="btnres" value="calcular">
                </td>
            </tr>
            <tr>
                <td>
                    El aerea del triangulo es 
                </td>
                <td><?php
                 echo $aerea;
                ?></td>
            </tr>
        </table>
    </form>
</body>
</html>