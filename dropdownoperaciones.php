<?php
if(isset($_POST["btnCalcular"])){
$Operacion=$_POST["ddlOperaciones"];
if($Operacion==1){
$Num1=$_POST["txtnum1"];
$Num2=$_POST["txtnum2"];
$Resultado=$Num1+$Num2;
}
elseif($Operacion==2){
    $Num1=$_POST["txtnum1"];
    $Num2=$_POST["txtnum2"];
    $Resultado=$Num1-$Num2;
}
elseif($Operacion==3){
    $Num1=$_POST["txtnum1"];
$Num2=$_POST["txtnum2"];
$Resultado=$Num1*$Num2;
}
elseif($Operacion==4){
    $Num1=$_POST["txtnum1"];
$Num2=$_POST["txtnum2"];
$Resultado=$Num1/$Num2;
}
}
else{
    $Resultado="";
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
    <form action="dropdownoperaciones.php" method="post">
        <label for="">Numero 1</label>
        <br>
        <input type="text" name="txtnum1" id="">
        <br>
        <label for="">Numero 2</label>
        <br>
        <input type="text" name="txtnum2" id="">
        <br>
        <select name="ddlOperaciones">
            <option value="0">[SELECCIONAR]</option>
            <option value="1">Suma</option>
            <option value="2">Resta</option>
            <option value="3">Multiplicacion</option>
            <option value="4">Division</option>
        </select>
        <br>
        <input type="submit" name="btnCalcular" value="calcular">
        <br>
        <?php echo $Resultado;?>
        <br>
    </form>
</body>
</html>