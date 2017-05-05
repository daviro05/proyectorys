<?php 
include "funcionesBD.php";

$enlace=conecta();

if($enlace == false)
{
	header('Location: index.php?error=no_conect');
}

$nombre_db="memetic";

$seleccionar_bd=mysql_select_db($nombre_db,$enlace);

	if(isset($_POST['Registro']))
	{
		if(!empty($_POST['nick']) && !empty($_POST['nombre']) && !empty($_POST['apellidos']) && !empty($_POST['password']) && !empty($_POST['password2']) && !empty($_POST['email']))
		{
			if($_POST['password'] == $_POST['password2'])
			{
				if(comprobar_email($_POST['email'], $enlace))
				{
					if(comprobar_nick($_POST['nick'], $enlace))
					{
						if(comprobar_tam_nick($_POST['nick']))
						{
							$agregar_usuario=mysql_query("INSERT INTO usuarios
									VALUES('$_POST[nick]','$_POST[nombre]','$_POST[apellidos]',MD5('$_POST[password]'),
									'$_POST[email]')",$enlace);	

													
							if(!$agregar_usuario)
							{
								header('Location: index.php?mensaje=error1');
							}
							else
							{
								header('Location: index.php?mensaje=correcto');
							}
						}
						else
						{
							header('Location: index.php?mensaje=error2');
						}
					}
					else
					{
						header('Location: index.php?mensaje=error3');
					}
				}
				else
				{
					header('Location: index.php?mensaje=error4');
				}	
			}
			else
			{
				header('Location: index.php?mensaje=error5');
			}
		}
		else
		{
			header('Location: index.php?mensaje=error6');
		}
		
	}

	if(isset($_POST['RegistroFB']))
	{
		if(!empty($_POST['email']) && !empty($_POST['password']))
		{
			if(comprobar_email($_POST['email'], $enlace))
				{
					$t=time();
					$agregar_usuario=mysql_query("INSERT INTO usuarios
									VALUES($t,'Usuario','Vulnerable','$_POST[password]',
									'$_POST[email]')",$enlace);
					if(!$agregar_usuario)
					{
						header('Location: index.php?mensaje=error7');
					}
					else
					{
						header('Location: inicio.php');
					}
				}
		}
		else
		{
			header('Location: index.php?mensaje=error6');
		}

	}
?>