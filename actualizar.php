<?php
    require_once "conexion.php";
    $instancia_Conectar= new conectar();
    $conexion = $instancia_Conectar->conexion();
    $nro=$_GET['nro'];
    $sql="SELECT cedula,nombres,CAST1,CAST2,CAST3,ING1,ING2,ING3,MAT1,MAT2,MAT3,EF1,EF2,EF3,AP1,AP2
    ,AP3,CN1,CN2,CN3,GHC1,GHC2,GHC3,OYV1,OYV2,OYV3,PARG1,PARG2,PARG3 from 1a where nro='$nro'";
    $resultado=mysqli_query($conexion,$sql);
    $mostrar=mysqli_fetch_row($resultado);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Estudiante</title>
    <link rel="stylesheet" href="estilosA.css">
</head>
<body>
    <h1>Actualizar datos de Estudiante</h1>
        <div id="Informacion">
            <h2>Actualice los datos del Estudiante</h2>
            <form action="editar.php" method="POST">
                <label for="">Número de Estudiante</label>
                <input  value="<?php echo $nro ?>" type="text" hidden="" name="nro">
                <label for="">Cédula de Identidad</label>
                <input class="controls" value="<?php echo $mostrar[0] ?>" type="text" name="cedula" id="cedula">
                <br>
                <label for="">Apellidos y Nombres</label>
                <input class="controls" value="<?php echo $mostrar[1] ?>" type="text" name="nombres" id="nombres">
                <p>
                        <label for="">CASTELLANO</label>
                        <input value="<?php echo $mostrar[2] ?>" type="number" name="CAST1"id="CAST1">
                        <input value="<?php echo $mostrar[3] ?>" type="number" name="CAST2"id="CAST2">
                        <input value="<?php echo $mostrar[4] ?>" type="number" name="CAST3"id="CAST3">
                    </p>
                    <p>
                        <label for="">INGLES</label>
                        <input value="<?php echo $mostrar[5] ?>" type="number" name="ING1"id="ING1">
                        <input value="<?php echo $mostrar[6] ?>" type="number" name="ING2"id="ING2">
                        <input value="<?php echo $mostrar[7] ?>" type="number" name="ING3"id="ING3">
                    </p>
                    <p>
                        <label for="">MATEMATICA</label>
                        <input value="<?php echo $mostrar[8] ?>" type="number" name="MAT1"id="MAT1">
                        <input value="<?php echo $mostrar[9] ?>" type="number" name="MAT2"id="MAT2">
                        <input value="<?php echo $mostrar[10] ?>" type="number" name="MAT3"id="MAT3">
                    </p>
                    <p>
                        <label for="">EDUC. FISICA</label>
                        <input value="<?php echo $mostrar[11] ?>" type="number" name="EF1"id="EF1">
                        <input value="<?php echo $mostrar[12] ?>" type="number" name="EF2"id="EF2">
                        <input value="<?php echo $mostrar[13] ?>" type="number" name="EF3"id="EF3">
                    </p>
                    <p>
                        <label for="">ARTE Y PAT</label>
                        <input value="<?php echo $mostrar[14] ?>" type="number" name="AP1"id="AP1">
                        <input value="<?php echo $mostrar[15] ?>" type="number" name="AP2"id="AP2">
                        <input value="<?php echo $mostrar[16] ?>" type="number" name="AP3"id="AP3">
                    </p>
                    <p>
                        <label for="">CS. NATURALES</label>
                        <input value="<?php echo $mostrar[17] ?>" type="number" name="CN1"id="CN1">
                        <input value="<?php echo $mostrar[18] ?>" type="number" name="CN2"id="CN2">
                        <input value="<?php echo $mostrar[19] ?>" type="number" name="CN3"id="CN3">
                    </p>
                    <p>
                        <label for="">GHC</label>
                        <input value="<?php echo $mostrar[20] ?>" type="number" name="GHC1"id="GHC1">
                        <input value="<?php echo $mostrar[21] ?>" type="number" name="GHC2"id="GHC2">
                        <input value="<?php echo $mostrar[22] ?>" type="number" name="GHC3"id="GHC3">
                    </p>
                    <p>
                        <label for="">O Y CONV</label>
                        <input value="<?php echo $mostrar[23] ?>" type="number" name="OYV1"id="OYV1">
                        <input value="<?php echo $mostrar[24] ?>" type="number" name="OYV2"id="OYV2">
                        <input value="<?php echo $mostrar[25] ?>" type="number" name="OYV3"id="OYV3">
                    </p>
                    <p>
                        <label for="">PART. GRUP</label>
                        <input value="<?php echo $mostrar[26] ?>" type="number" name="PARG1"id="PARG1">
                        <input value="<?php echo $mostrar[27] ?>" type="number" name="PARG2"id="PARG2">
                        <input value="<?php echo $mostrar[28] ?>" type="number" name="PARG3"id="PARG3">
                    </p>
                <button id="listo">Actualizar</button>
                </form>
                <button id="regresar" onclick="location.href='index_creacion.php'">Regresar</button>
        </div> 
</body>
</html>