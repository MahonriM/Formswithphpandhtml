<?php
if(isset($_POST["btnEval"])){
$Resultado="";
if (isset($_POST['chbsuma'])){
                $Num1=$_POST["txtnum1"];
                $Num2=$_POST["txtnum2"];
				$Resultado = "Suma".$Resultado ."  ".($Num1+$Num2);
			}
			if (isset($_POST['chbresta']))
			{
                $Num1=$_POST["txtnum1"];
                $Num2=$_POST["txtnum2"];
				$Resultado = $Resultado ."Resta"."  ".($Num1-$Num2);
			}
			if (isset($_POST['chbmul']))
			{  $Num1=$_POST["txtnum1"];
                $Num2=$_POST["txtnum2"];
				$Resultado = $Resultado ."Multiplicacion". "  ". ($Num1*$Num2);
			}
            if(isset($_POST['chbdiv'])){
                $Num1=$_POST["txtnum1"];
                $Num2=$_POST["txtnum2"];
                $Resultado= $Resultado."Division"."  ".($Num1/$Num2);
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
<form action="checkbox.php" method="post">
        <label for="">Numero 1</label>
        <input type="text" name="txtnum1" id="num1">
        <br>
        <label for="">Numero 2</label>
        <input type="text" name="txtnum2" id="num2">
        <br>
        <table border="1">
            <tr>
                <td>
                    <input type="checkbox" name="chbsuma"  id=""> Suma
                </td>
                <td>
                    <input type="checkbox" name="chbresta"  id=""> Resta
                </td>
                <td>
                    <input type="checkbox" name="chbmul"  id=""> Multiplicacion
                </td>
                <td>
                    <input type="checkbox" name="chbdiv"  id=""> Division
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                <input type="submit" name="btnEval">
            </td></tr>
        </table>
        <label>Resultado</label>
        <br>
        <?php
            echo"".$Resultado;
        ?>
</form>    
</body>
</html>