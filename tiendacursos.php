<?php
if(isset($_POST["btnCalcular"])){
$calculo="";
$Libro=$_POST["RdbSiNo"];
$personas=$_POST["txtpersonas"];
$Iva="";
if(isset($_POST["chbFactura"])){
if($Libro=="Si"){
$subtotal="";
  if(isset($_POST["chbsql"])){
    $subtotal=$personas*1200+(450*$personas);
    $Iva=$subtotal*16/100;
    $calculo=$subtotal+$Iva;
  }
  if(isset($_POST["chbjava"])){
    $subtotal=$subtotal+$personas*2800+(450*$personas);
    $Iva=$subtotal*16/100;
    $calculo=$subtotal+$Iva;
  }
  if(isset($_POST["chbcsharp"])){
    $subtotal=$subtotal+$personas*2300+(450*$personas);
    $Iva=$subtotal*16/100;
    $calculo=$subtotal+$Iva;
  }
  if(isset($_POST["chbphp"])){
    $subtotal=$subtotal+$personas*1800+(450*$personas);
    $Iva=$subtotal*16/100;
    $calculo=$subtotal+$Iva; 
  }
}
elseif($Libro=="No"){
  $subtotal="";
  if(isset($_POST["chbsql"])){
    $subtotal=$personas*1200;
    $Iva=$subtotal*16/100;
    $calculo=$subtotal+$Iva;
  }
  if(isset($_POST["chbjava"])){
    $subtotal=$subtotal+$personas*2800;
    $Iva=$subtotal*16/100;
    $calculo=$subtotal+$Iva;
  }
  if(isset($_POST["chbcsharp"])){
    $subtotal=$subtotal+$personas*2300;
    $Iva=$subtotal*16/100;
    $calculo=$subtotal+$Iva;
  }
  if(isset($_POST["chbphp"])){
    $subtotal=$subtotal+$personas*1800;
    $Iva=$subtotal*16/100;
    $calculo=$subtotal+$Iva; 
  }
}
}//factura
else
{//sin factura
  if($Libro=="Si"){
    if(isset($_POST["chbsql"])){
      $subtotal=$personas*1200+(450*$personas);
      $calculo=$subtotal;
    }
    if(isset($_POST["chbjava"])){
      $subtotal=$subtotal+$personas*2800+(450*$personas);
      $calculo=$subtotal;
    }
    if(isset($_POST["chbcsharp"])){
      $subtotal=$subtotal+$personas*2300+(450*$personas);
      $calculo=$subtotal;
    }
    if(isset($_POST["chbphp"])){
      $subtotal=$subtotal+$personas*1300+(450*$personas);
      $calculo=$subtotal; 
    }
  }
  elseif($Libro=="No"){
    if(isset($_POST["chbsql"])){
      $subtotal=$personas*1200;
      $calculo=$subtotal;
    }
    if(isset($_POST["chbjava"])){
      $subtotal=$subtotal+$personas*2800;
      $calculo=$subtotal;
    }
    if(isset($_POST["chbcsharp"])){
      $subtotal=$subtotal+$personas*2300;
      $calculo=$subtotal;
    }
    if(isset($_POST["chbphp"])){
      $subtotal=$subtotal+$personas*1800;
      $calculo=$subtotal; 
    }
  }
}
}// fin del if isset
else{
  $subtotal=" ";
  $Iva=" ";
  $calculo=" ";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda cursos</title>
</head>
<body>
  <form action="tiendacursos.php" method="post">
  <label for="">Ingresa el numero de personas</label>
    <input type="text" name="txtpersonas">
    <br>
       <p>
         <label for="">
         <input type="checkbox" name="chbsql" id=""> SQL $1200
         </label>
         <label for="">
         <input type="checkbox" name="chbjava" id=""> Java $2,800
         </label>
         <label for="">
         <input type="checkbox" name="chbcsharp" id=""> C# $2,300
         </label>
         <label for="">
         <input type="checkbox" name="chbphp" id=""> PHP $1,800
         </label>
       </p>
    <br>
    <label for="">Libro</label>
<label>
<input type="radio" name="RdbSiNo" value="Si">
Si
</label> 
<label>
  <input type="radio" name="RdbSiNo" value="No">
No
</label>
<br>
<label for="">Factura</label>
<label for=""><input type="checkbox" name="chbFactura" id=""></label>
<br>
<input type="submit" name="btnCalcular"value="Total">
<br>
<p><?php
echo "El subtotal es  ".$subtotal. "el iva es ".$Iva."el total es ".$calculo;
?> </p> 
</form>
</body>
</html>