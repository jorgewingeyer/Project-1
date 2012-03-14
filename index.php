<? require("datos.php");?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es">
<head>
    <title>Proyectos de empresa</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <link href="css/estilos.css" rel="stylesheet" type="text/css" />
</head>
<body>
//coment//
<!-- CABECERA -->

<h1> <span id="pz">Empesa</span> <span id="shop" lang="en">Free</span><br/> <span id="lema">Proyectos de empresa</span> </h1>
<h2>Trabajadores</h2>
<?   if($_GET[operacion]){$operacion= $_GET[operacion];}
	 if(!isset($_GET[nume])){
		 $nume="";
	}else{ 
		$nume= $_GET[nume];
	}
if ($operacion=='informes'){
	include('informes.php');
}else if ($operacion=='informe1'){
	include('informe1.php');
}else{
	include('listado.php');
}
?>
</body>
</html>