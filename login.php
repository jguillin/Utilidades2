<?php
   $connect = pg_connect("host=localhost port=5432 dbname=administra user=postgres password=1234");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Gastos</title>
<style type="text/css">
  .sr {
    background-color: #FFFFCF;
    color: #000000;
    font-family: Arial;
    font-size: 12px;
      }
  input.color1 {background-color: #00CC99; font-weight: bold; font-size: 12px; color: white;}
</style>
</head>
<body>
<form action="usuario.php" method='POST'>
<fieldset style='width:auto'><LEGEND>Usuarios</LEGEND>
   <table align='center'>
	  <tr>
		<td class="sr" align='right' style="text-decoration:none">Login:</td>
		<td class="sr"><input type="text" name="login" size="10" maxlength="10" align="right"/></td>
	  </tr>
	  <tr>
		<td class="sr" align='right' style="text-decoration:none">Contraseña:</td>
		<td class="sr"><input type="password"  name="contrasena" size="20" maxlength="20" align="right"/></td>
	  </tr>
	</table>
<table align="center">
   <tr>
    <td>
         <input class="color1" type="submit" name="action" value="Ingresar"/>
<!--         <INPUT TYPE="button" class="color1" VALUE="Salir" ONCLICK="window.location.href='menu.html'">
-->    </td>
    </tr>
</table>
</fieldset>
<br/>

</form>
</body>
</html>
<?php
$connect = pg_connect("host=localhost port=5432 dbname=administra user=postgres password=1234");

$login      = $_POST['login'];
$contrasena = $_POST['contrasena'];

$clave = "SELECT FROM acceso WHERE login1=$login";

if ($login=="mega" && $contraseña =="gato") {

echo "<h1>Su contraseña es correcta<h1>";
echo "Bienvenido al sistema";

}
else {

echo "<p>Su Login o Contraseña son Incorrectos</p>";
echo "Se ha pulsado el boton enviar";

}
header("location:menu.html");
?>