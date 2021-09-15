<?php
  if(isset($_POST["btnCacular"]))
  {
    $Num1 = $_POST["txtNumero1"];
    $Num2 = $_POST["txtNumero2"];

    $Resultado = $Num1 + $Num2;

  }
  else if(isset($_POST["btnBorrar"]))
  {
    $Resultado="";
  }
  else
  {
    $Resultado="";
  }
?>

<html>
<head></head>
<title>Prueba html</title>
<body>
 <form action = "practica.php" method = "post">
    <table>
      <tr>
        <td><b>Número 1</b></td>
        <td><input type="text" name="txtNumero1"/></td>
      </tr>
      <tr>
        <td><b>Número 2</b></td>
        <td><input type="text" name="txtNumero2"/></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><center><input type="submit" name="btnCacular" value ="Calcular"/>
                    <input type="submit" name="btnBorrar" value ="Borrar"/>  </center></td>
      </tr>
      <tr>
        <td><b>Resultado</b></td>
        <td><?php echo $Resultado; ?></td>
      </tr>
    </table>
  </form>
</body>
</html>