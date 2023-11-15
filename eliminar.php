<?php
    $nro=$_GET['nro'];
    
    require_once "conexion.php";
    require_once "crud.php";

    $instancia = new metodos();
    if ($instancia->eliminar_Estudiante($nro)==1) {
        header("location:index_creacion.php");
    } else {
        echo "Error al realizar la operacion";
    }
?>