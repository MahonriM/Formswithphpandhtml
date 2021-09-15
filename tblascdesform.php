<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="tblascdesform.php" method="post">
    <label for="">Ingresa el numero de la tabla</label>
    <br>
    <input type="text" name="txttbl" id="">
    <br>
    <label for="">Numero donde terminara la tabla</label>
    <br>
    <input type="text" name="txtnum1" id="">
    <p>
        <label for=""><input type="radio" name="Rdborden" id="" value="A">Ascendente numero</label>
        <label for=""><input type="radio" name="Rdborden" id="" value="D">Descendente numero</label>
        <br>
        <label for=""><input type="radio" name="Rdborden1" id="" value="A">Ascendente tabla</label>
        <label for=""><input type="radio" name="Rdborden1" id="" value="D">Descendente tabla</label>
    </p>
    <br>
    <input type="submit" name="btntbl"value="Mostrar Tabla">
    <br>
    <p>
        <?php
            if(isset($_POST["btntbl"])){
                $tbl_hasta=$_POST["txtnum1"];
                $numero_usuario=$_POST["txttbl"];
                $num_posicion=$_POST["Rdborden"];
                $pos_tabla=$_POST["Rdborden1"];
                if($num_posicion=="A"&&$pos_tabla=="A"){
                    echo"Ascendente";
                    for($num=1;$num<=$tbl_hasta;$num++){
                        echo( $numero_usuario."X".$num."=".( $numero_usuario*$num)."<br>");
                    }
                }
                elseif($num_posicion=="D"&&$pos_tabla=="A"){
                    for ($n=1; $n <=$tbl_hasta ; $n++){
                        echo "".$numero_usuario.' * '.$n.' = '.$numero_usuario*$n."<br>";
                    }
                }
                elseif($num_posicion=="A"&&$pos_tabla=="D"){
                    for ($tabla=1; $tabla <=$tbl_hasta ; $tabla++){
                        echo 'Tabla del '.$tabla.'<br />';
                    for ($n=$numero_usuario; $n >=1 ; $n--){
                        echo "".$tabla.' * '.$n.' = '.$tabla*$n."<br>";
                    }}
                }
                
                elseif($num_posicion=="D"&&$pos_tabla=="D"){
                        for($n=$tbl_hasta;$n>=1;$n--){
                            echo"".$numero_usuario."X".$n."=".($numero_usuario*$n)."<br>";
                        }
                }
            }
        ?>
    </p>
</form>
</body>
</html>