<?php
	function conectar()
	{
		$host="localhost";
		$port="5432";
		$dbname="clase12";
		$user="postgres";
		$password="postgres";
        
		$cadenaConexion = "host=$host port=$port dbname=$dbname user=$user password=$password";
        
		$conexion = pg_connect($cadenaConexion) or die("<br/>Error en la Conexión: ".pg_last_error());
		
		return $conexion;
	}
?>