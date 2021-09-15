<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="tblmultiplicar.php" method="post">
        <label for="">Ingresa el numero de la tabla</label>
        <br>
        <input type="text" name="txttabla" id="">
        <br>
        <p>
            <label for=""><input type="radio" name="Rdbtabla" id="" value="7">Tabla 7</label>
            <label for=""><input type="radio" name="Rdbtabla" id="" value="9">Tabla 9</label>
            <label for=""> <input type="radio" name="Rdbtabla" id="" value="14">Tabla 14</label>
        </p>
        <br>
        <input type="submit" name= "btnRadio"value="Mostrar tabla">
        <br>
        <p>
        <?php
            if (isset($_REQUEST['btnRadio'])){
                $tabla=$_REQUEST['Rdbtabla'];
                $numero_tabla=$_POST['txttabla'];
                if($tabla=="7"){
                    for($i=1;$i<=$numero_tabla;$i++){
                        echo "7". " ". "X".$i." = ".(7*$i)."<br>";
                    }
                }
                elseif($tabla=="9"){
                    for($i=1;$i<=$numero_tabla;$i++){
                        echo "9" ." "."X ". $i."  "."=" .(9*$i)."<br>";
                    }
                }
                elseif($tabla=="14"){
                    for($i=1;$i<=$numero_tabla;$i++){

                    
                    echo "14" ." "."X ". $i."  "."=" .(14*$i)."<br>";
                    }
                }
            }
        ?>
        </p>
    </form>
</body>
</html>