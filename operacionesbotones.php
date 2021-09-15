<?php
if(isset($_POST["btnsuma"])){
    $num1=$_POST["txtnum1"];
    $num2=$_POST["txtnum2"];
 
    $Resultado=$num1 + $num2;
}
elseif(isset($_POST["btnresta"])){
    $num1=$_POST["txtnum1"];
    $num2=$_POST["txtnum2"];
 
    $Resultado=$num1-$num2;
}
elseif(isset($_POST["btnmult"])){
    $num1=$_POST["txtnum1"];
    $num2=$_POST["txtnum2"];
 
    $Resultado=$num1*$num2;
}
elseif(isset($_POST["btndiv"])){
    $num1=$_POST["txtnum1"];
    $num2=$_POST["txtnum2"];
 
    $Resultado=$num1/$num2;
}
else{
    $Resultado="";}
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
    <form action="operacionesbotones.php" method="post">
    <p> Numero 1    
    <input type="text" name="txtnum1"></p>
    <br>
    <p> Numero 2    
    <input type="text" name="txtnum2"></p>
    <input type="submit" name="btnsuma"value="+">
    <input type="submit" name="btnresta"value="-">
    <input type="submit" name="btnmult"value="*">
    <input type="submit" name="btndiv"value="/">
    <br>
    <?php echo" <p>".$Resultado ."</p>"
    ?>
    </form>
</body>
</html>