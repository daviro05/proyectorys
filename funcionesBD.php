<?php
function conecta()
{
	$host='localhost';
	$usuario='root';
	$clave='root';

	$resultado_conexion=mysql_connect($host,$usuario,$clave);

	return $resultado_conexion;
}

function validar_clave($pass)
{
	$tam=strlen($pass);
	if($tam>6 && $tam<20)
	{
		return true;
	}
	else return false;
	
}

function comprobar_tam_nick($nick)
{
	$tam = strlen($nick);
	
	if($tam>4 && $tam<16)
	{
		return true;
	}
	else
	{
		return false;
	}
}

function comprobar_nick($nick,$enlace)
{
	$comprobar = mysql_query("SELECT nick from usuarios",$enlace);
	
	$bandera = true;
	
	if($comprobar)
	{
		while($fila=mysql_fetch_array($comprobar))
		{
			if($fila['nick'] == $nick)
			{
				$bandera = false;
			}
		}
	}
	
	return $bandera;
}

function comprobar_user_registrado($usuario,$enlace)
{
	$comprobar_user = mysql_query("SELECT nick from usuarios WHERE nick = '$usuario'",$enlace);
	
	if($comprobar_user)
	{
		if(mysql_num_rows($comprobar_user)==1)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	
}

function comprobar_email($email,$enlace)
{
	if(filter_var($email,FILTER_VALIDATE_EMAIL))
	{
		$comprobar = mysql_query("SELECT email from usuarios",$enlace);
	
		if($comprobar)
		{
			if(mysql_num_rows($comprobar)==1)
			{
				while($fila=mysql_fetch_array($comprobar))
				{
					if($fila['email']==$email)
					{
						return false;
					}
					else
					{
						return true;
					}
				}
			}
			else
			{
				return true;
			}
		}
	}
	else
	{
		return false;
	}
}

?>