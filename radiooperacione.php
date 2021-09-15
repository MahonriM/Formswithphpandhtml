<?php
if(isset($_POST['btnRadio'])){
    if($_POST["Rdboperaciones"]=="+"){
        $Num1=$_POST["txtnum1"];
        $Num2=$_POST["txtnum2"];
        $Resultado=$Num1+$Num2;
    }
    elseif($_POST["Rdboperaciones"]=="-"){
        $Num1=$_POST["txtnum1"];
        $Num2=$_POST["txtnum2"];
        $Resultado=$Num1-$Num2;
    }
    elseif($_POST["Rdboperaciones"]=="/"){
        $Num1=$_POST["txtnum1"];
        $Num2=$_POST["txtnum2"];
        $Resultado=$Num1/$Num2;
    }
    elseif($_POST["Rdboperaciones"]=="*"){
        $Num1=$_POST["txtnum1"];
        $Num2=$_POST["txtnum2"];
        $Resultado=$Num1*$Num2;
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
    <form action="radiooperacione.php" method="post">
        <label for="">Numero 1</label>
        <input type="text" name="txtnum1" id="num1">
        <br>
        <label for="">Numero 2</label>
        <input type="text" name="txtnum2" id="num2">
        <br>
        <p>
            <label> <input type="radio" name="Rdboperaciones" value="+">Suma</label>
            <br>
            <label> <input type="radio" name="Rdboperaciones" value="-">Resta</label>
            <br>
            <label> <input type="radio" name="Rdboperaciones" value="/">Division</label>
            <br>
            <label> <input type="radio" name="Rdboperaciones" value="*">Multiplicacion</label>
            <br>
        </p>
        <input type="submit" name="btnRadio" value="Calcular">
        <?php
        echo"<p>".$Resultado."</p>";
        ?>
        <br>
    </form>
</body>
</html>