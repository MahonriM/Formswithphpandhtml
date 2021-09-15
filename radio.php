<?php
	if (isset($_POST['btnRadio']))
	{
		$Resultado = $_POST["RdbGenero"];	
	}
	else if (isset($_POST["btnCombo"]))
	{
	    $Resultado = $_POST["ddlNombres"];
	    if ($_POST['ddlNombres'] == 0)	
        {
			$Resultado = "Debe seleccionar..";
	    }
    }
	else if(isset($_POST["btnEvaluar"]))
	{
		$Resultado = "";

			if (isset($_POST['chbPHP']))
			{
				$Resultado = $Resultado . "PHP ";
			}
			if (isset($_POST['chbC']))
			{
				$Resultado = $Resultado . "C# ";
			}
			if (isset($_POST['chbJAVA']))
			{
				$Resultado = $Resultado . "JAVA ";
			}
	}
	else
	{
		$Resultado = "";
	}

?>


<html>
<head></head>
<body>
<form action='radio.php' method='post'>

<p>
   <label><input type="radio" name = "RdbGenero" value ="M">Masculino</label>
   <br>
   <label><input type="radio" name = "RdbGenero" value ="F">Femenino</label>
   <br>
</p>

<input type='submit' name ='btnRadio' value='Evaluar'>

<select name ="ddlNombres">
	  <option value=0>[SELECCIONAR]</option>
	  <option value=1>Luis</option>
	  <option value=2>Pedro</option>
	  <option value=3>Mario</option>
	  <option value=4>Laura</option>
</select>

<input type='submit' name ='btnCombo' value='Evaluar'>
<table border = "1">
		<tr>
			<td><input type="checkbox" name="chbPHP">PHP</td>
			<td><input type="checkbox" name="chbC">C#</td>
			<td><input type="checkbox" name="chbJAVA">JAVA</td>
		</tr>
		<tr>
			<td></td>
			<td><input type='submit' name ='btnEvaluar' value='Evaluar'></td>
			<td></td>
		</tr>
		<tr>
			<td><b>Resultado</b> </td>
			<td> <?php echo $Resultado; ?> </td>
			<td></td>
		</tr>		
</form>
</body>
</html>