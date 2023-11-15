<?php

    require_once "conexion.php";
    require_once "crud.php";

    $nro=$_POST['nro'];
    $cedula=$_POST['cedula'];
    $nombres=$_POST['nombres'];

    $CAST1=$_POST['CAST1'];
    $CAST2=$_POST['CAST2'];
    $CAST3=$_POST['CAST3'];

    $ING1=$_POST['ING1'];
    $ING2=$_POST['ING2'];
    $ING3=$_POST['ING3'];

    $MAT1=$_POST['MAT1'];
    $MAT2=$_POST['MAT2'];
    $MAT3=$_POST['MAT3'];

    $EF1=$_POST['EF1'];
    $EF2=$_POST['EF2'];
    $EF3=$_POST['EF3'];

    $AP1=$_POST['AP1'];
    $AP2=$_POST['AP2'];
    $AP3=$_POST['AP3'];

    $CN1=$_POST['CN1'];
    $CN2=$_POST['CN2'];
    $CN3=$_POST['CN3'];

    $GHC1=$_POST['GHC1'];
    $GHC2=$_POST['GHC2'];
    $GHC3=$_POST['GHC3'];

    $OYV1=$_POST['OYV1'];
    $OYV2=$_POST['OYV2'];
    $OYV3=$_POST['OYV3'];

    $PARG1=$_POST['PARG1'];
    $PARG2=$_POST['PARG2'];
    $PARG3=$_POST['PARG3'];

    $datos=array($nro, $cedula, $nombres, $CAST1, $CAST2, $CAST3, $ING1, $ING2 ,$ING3 ,$MAT1 ,$MAT2 ,$MAT3 ,$EF1
    ,$EF2 ,$EF3 ,$AP1 ,$AP2 ,$AP3 ,$CN1 ,$CN2 ,$CN3, $GHC1, $GHC2, $GHC3, $OYV1, $OYV2, $OYV3, $PARG1, $PARG2, $PARG3);

    $instancia = new metodos();
    if ($instancia->crear_Estudiante($datos)==1) {
        header("location:index_creacion.php");
    } else {
        echo "Error al realizar el registro";
    }
    
?>