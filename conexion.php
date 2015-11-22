<?php 
	//$url = "postgres://bvwqtbbjrfhckx:l_LEjFRRGMhvMzDErHwQyY_a1n@ec2-107-21-219-235.compute-1.amazonaws.com:5432/d51gev90fgshgo"
	$conn_string = "host=ec2-107-21-219-235.compute-1.amazonaws.com port=5432 dbname=d51gev90fgshgo user=bvwqtbbjrfhckx password=l_LEjFRRGMhvMzDErHwQyY_a1n";
	$conexion = pg_connect($conn_string);
?>  
