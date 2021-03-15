<?php
	/**
	 * Esta Clase contendrá la o las cadenas de conexión a Tus Bases de Datos
	 */
	class database
	{
		function con_pg(){
	    	$con1 = pg_connect("host=127.0.0.1 port=5432 dbname=villam user=postgres password=admin");
			
	    	return($con1);
		}
		function con_pg_f(){
	    	$con1 = pg_connect("host=localhost port=5432 dbname=villam user=openpg password=openpgpwd");
	    	return($con1);
		}
		function con_mysql(){
	    	$con1 = mysqli_connect("localhost","root","");
	    	mysqli_select_db($con1,"inventario");
	    	return($con1);
		}
		function con_pg_example(){
	    	$con1 = pg_connect("host=127.0.0.1 port=5432 dbname= user= password=");
	    	return($con1);
		}
		function con_mysql_example(){
	    	$con1 = mysqli_connect("nombre_host","usuario_base_de_datos","contraseña_base_de_datos");
	    	mysqli_select_db($con1,"nombre_base_de_datos");
	    	return($con1);
		}
	}