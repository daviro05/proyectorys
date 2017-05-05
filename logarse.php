<?php
include "funcionesBD.php";

$enlace=conecta();

if($enlace == false)
{
	header('Location: index.php?error=no_conect');
}

$nombre_db="memetic";

$seleccionar_bd=mysql_select_db($nombre_db,$enlace);


if($seleccionar_bd == false)
{
	header('Location: index.php?error=bd_noselect');
}
else 
{
	if($_POST['usuario']!=" ")
	{
		$usuario=$_POST['usuario'];
		$clave=$_POST['password'];
		
			if(validar_clave($clave))
			{
				$usuario=mysql_real_escape_string($usuario);
				$clave=md5(mysql_real_escape_string($clave));
				
				$sentencia=mysql_query("SELECT * FROM usuarios WHERE usuario='$usuario' and password='$clave'",$enlace);
				if(mysql_num_rows($sentencia)==1)
				{
					$fila=mysql_fetch_array($sentencia);
					$valor=$fila['nick'];
					header("Location:inicio.php");
				}
				else
				{
					header('Location: index.php?mensaje=error9');
				}
				mysql_close($enlace);
				
			}
			else 
			{
				header('Location: index.php?mensaje=error6');
			}
	}
	else
	{
		header('Location: index.php?error=no_nick');
	}
}
?>