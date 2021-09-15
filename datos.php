<?php
if(isset($_POST["btnenviar"])){
    $nombre=$_POST["txtnombre"];
    $edad=$_POST["edad"];
    $direccion=$_POST["direccion"];
    $resultado =($nombre."  ".$edad." ".$direccion);
}
else{
$resultado="";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos</title>
</head>
<body>
    <form action="datos.php" method="post">
        <table>
            <tr>
                <td>
                    Nombre completo
                </td>
                <td>
                    <input type="text" name="txtnombre" id="txtnombre">
                </td>
            </tr>
            <tr>
                <td>
                    Edad
                </td>
                <td><input type="text" name="edad" id="edad"></td>
            </tr>
            <tr>
                <td>
                    Direccion
                </td>
                <td>
                    <input type="text" name="direccion" id="direccion">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="btnenviar" value="Enviar">
                </td>
            </tr>
            <tr>
                <td>
                    Resultado
                </td>
                <td>
                    <?php
                        echo $resultado;
                    ?>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>