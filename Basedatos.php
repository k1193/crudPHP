<?php

class Basedatos{

    //atributos
    
private  $servidor="localhost";
private $usuario="root";
private $password="";
private $nombreBasedatos="alquilando";


private $conexion;
//constructor

function  __construct(){}


public function conectarconBasedatos(){
   // se establece la conexión
    $this->conexion=mysql_connect(  
        $this->servidor;
        $this->usuario;
        $this->password;
        $this->nombreBasedatos;
    );

//validar estado de la conexión
    if(!($this->conexion)){
        die('<br>Error de conexión('.mysql_connect_errno().')'.mysql_connect_error());

    }else{
        echo "<br> conexión base de datos".$this->nombreBasedatos;         
    }
}







}






?>