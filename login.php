<?php

include("url de conexion");

$Usuario = $_POST['usuario'];
$Contrasena = $_POST['contra'];



if($Usuario==NULL || $Contrasena==NULL){
	//URL DE ERROR DE INGRESO
}


else{

     $query = "SELECT Nickname,Contrasena FROM Ingreso WHERE Nickname='$Usuario' and Contrasena='$contra'";
     $result = pg_query($query) or die('La consulta fallo: ' . pg_last_error());
     $numRegistros= pg_num_rows($result);


     if($numRegistros==1) {

       //URL O CONTROLADOR PARA INGRESAR A LA ACTIVIDAD MENÚ

       } else {

       //URL DE ERROR DE INGRESO

     }
    
}//else

?>
