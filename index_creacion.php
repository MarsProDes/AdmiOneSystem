<?php
require_once "conexion.php";   
require_once "crud.php";


?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sistema de Notas</title>
        <link rel="stylesheet" href="estilosA.css">
    </head>
        <body>
            <h1>Registrar nuevo Estudiante</h1>
            <div id="Informacion">
                <h2>Ingrese los datos del Estudiante</h2>
                <form action="crear.php" method="POST">
                    <label for="">Número de Estudiante</label>
                    <input class="controls" type="text" name="nro" id="nro" placeholder="Numero de Estudiante">
                    <label for="">Cédula de Identidad</label>
                    <input class="controls" type="text" name="cedula" id="cedula" placeholder="Cédula de Identidad">
                    <label for="">Apellidos y Nombres</label>
                    <input class="controls" type="text" name="nombres" id="nombres" placeholder="Apellidos y Nombres del Estudiante">
                    <h3>Ingrese las Notas del Estudiante</h3>
                    <p>
                        <label for="">CASTELLANO</label>
                        <input type="number" name="CAST1" min="0" max="20">
                        <input type="number" name="CAST2" min="0" max="20">
                        <input type="number" name="CAST3" min="0" max="20">
                    </p>
                    <p>
                        <label for="">INGLES</label>
                        <input type="number" name="ING1" min="0" max="20">
                        <input type="number" name="ING2" min="0" max="20">
                        <input type="number" name="ING3" min="0" max="20">
                    </p>
                    <p>
                        <label for="">MATEMATICA</label>
                        <input type="number" name="MAT1" min="0" max="20">
                        <input type="number" name="MAT2" min="0" max="20">
                        <input type="number" name="MAT3" min="0" max="20">
                    </p>
                    <p>
                        <label for="">EDUC. FISICA</label>
                        <input type="number" name="EF1" min="0" max="20">
                        <input type="number" name="EF2" min="0" max="20">
                        <input type="number" name="EF3" min="0" max="20">
                    </p>
                    <p>
                        <label for="">ARTE Y PAT</label>
                        <input type="number" name="AP1" min="0" max="20">
                        <input type="number" name="AP2" min="0" max="20">
                        <input type="number" name="AP3" min="0" max="20">
                    </p>
                    <p>
                        <label for="">CS. NATURALES</label>
                        <input type="number" name="CN1" min="0" max="20">
                        <input type="number" name="CN2" min="0" max="20">
                        <input type="number" name="CN3" min="0" max="20">
                    </p>
                    <p>
                        <label for="">GHC</label>
                        <input type="number" name="GHC1" min="0" max="20">
                        <input type="number" name="GHC2" min="0" max="20">
                        <input type="number" name="GHC3" min="0" max="20">
                    </p>
                    <p>
                        <label for="">O Y CONV</label>
                        <input type="number" name="OYV1" min="0" max="20">
                        <input type="number" name="OYV2" min="0" max="20">
                        <input type="number" name="OYV3" min="0" max="20">
                    </p>
                    <p>
                        <label for="">PART. GRUP</label>
                        <input type="number" name="PARG1" min="0" max="20">
                        <input type="number" name="PARG2" min="0" max="20">
                        <input type="number" name="PARG3" min="0" max="20">
                    </p>

                    <button id="listo">Guardar</button>
                </form>
            </div> 
            <h1>Estudiantes Registrados</h1>   
                <div>
                    <table style="border-collapse: collapse;" border="0">   
                        <tr>
                            <td>Nro</td>
                            <td>Cédula</td>
                            <td>Apellidos y Nombres</td>
                            <td>CASTELLANO</td>
                            <td>INGLES</td>
                            <td>MATEMATICA</td>
                            <td>EDUC. FISICA</td>
                            <td>ARTE Y PAT</td>
                            <td>CS. NATURALES</td>
                            <td>GHC</td>
                            <td>O Y CONV</td>
                            <td>PART. GRUP</td>
                            <td></td>
                            <td></td>
                        </tr>
                            <?php
                                $intancia_Mostrar = new metodos();
                                $sql="SELECT nro,cedula,nombres,CAST1,CAST2,CAST3,ING1,ING2,ING3,MAT1,MAT2,
                                MAT3,EF1,EF2,EF3,AP1,AP2,AP3,CN1,CN2,CN3,GHC1,GHC2,GHC3,OYV1,OYV2,OYV3,PARG1,
                                PARG2,PARG3 from 1a";
                                $datos = $intancia_Mostrar->mostrar_Estudiante($sql);

                                foreach ($datos as $key) {                               
                            ?>

                        <tr>
                            <td><?php echo $key['nro'] ?></td>
                            <td><?php echo $key['cedula'] ?></td>
                            <td><?php echo $key['nombres'] ?></td>
                            <td>
                                <ul>
                                    <input type="text" name="CAST1" id="CAST1" value="<?php echo $key['CAST1'] ?>" readonly>
                                    <input type="text" name="CAST2" id="CAST2" value="<?php echo $key['CAST2'] ?>" readonly>
                                    <input type="text" name="CAST3" id="CAST3" value="<?php echo $key['CAST3'] ?>" readonly>
                                </ul>
                            </td>
                            <td>
                                <ul>
                                    <input type="text" name="ING1" id="ING1" value="<?php echo $key['ING1'] ?>" readonly>
                                    <input type="text" name="ING2" id="ING2" value="<?php echo $key['ING2'] ?>" readonly>
                                    <input type="text" name="ING3" id="ING3" value="<?php echo $key['ING3'] ?>" readonly>
                                </ul>
                            </td>
                            <td>
                                <ul>
                                    <input type="text" name="MAT1" id="MAT1" value="<?php echo $key['MAT1'] ?>" readonly>
                                    <input type="text" name="MAT2" id="MAT2" value="<?php echo $key['MAT2'] ?>" readonly>
                                    <input type="text" name="MAT3" id="MAT3" value="<?php echo $key['MAT3'] ?>" readonly>
                                </ul>
                            </td>
                            <td>
                                <ul>
                                    <input type="text" name="EF1" id="EF1" value="<?php echo $key['EF1'] ?>" readonly>
                                    <input type="text" name="EF2" id="EF2" value="<?php echo $key['EF2'] ?>" readonly>
                                    <input type="text" name="EF3" id="EF3" value="<?php echo $key['EF3'] ?>" readonly>
                                </ul>
                            </td>
                            <td>
                                <ul>
                                    <input type="text" name="AP1" id="AP1" value="<?php echo $key['AP1'] ?>" readonly>
                                    <input type="text" name="AP2" id="AP2" value="<?php echo $key['AP2'] ?>" readonly>
                                    <input type="text" name="AP3" id="AP3" value="<?php echo $key['AP3'] ?>" readonly>
                                </ul>
                            </td>
                            <td>
                                <ul>
                                    <input type="text" name="CN1" id="CN1" value="<?php echo $key['CN1'] ?>" readonly>
                                    <input type="text" name="CN2" id="CN2" value="<?php echo $key['CN2'] ?>" readonly>
                                    <input type="text" name="CN3" id="CN3" value="<?php echo $key['CN3'] ?>" readonly>
                                </ul>
                            </td>
                            <td>
                                <ul>
                                    <input type="text" name="GHC1" id="GHC1" value="<?php echo $key['GHC1'] ?>" readonly>
                                    <input type="text" name="GHC2" id="GHC2" value="<?php echo $key['GHC2'] ?>" readonly>
                                    <input type="text" name="GHC3" id="GHC3" value="<?php echo $key['GHC3'] ?>" readonly>
                                </ul>
                            </td>
                            <td>
                                <ul>
                                    <input type="text" name="OYV1" id="OYV1" value="<?php echo $key['OYV1'] ?>" readonly>
                                    <input type="text" name="OYV2" id="OYV2" value="<?php echo $key['OYV2'] ?>" readonly>
                                    <input type="text" name="OYV3" id="OYV3" value="<?php echo $key['OYV3'] ?>" readonly>
                                </ul>
                            </td>
                            <td>
                                <ul>
                                    <input type="text" name="PARG1" id="PARG1" value="<?php echo $key['PARG1'] ?>" readonly>
                                    <input type="text" name="PARG2" id="PARG2" value="<?php echo $key['PARG2'] ?>" readonly>
                                    <input type="text" name="PARG3" id="PARG3" value="<?php echo $key['PARG3'] ?>" readonly>
                                </ul>
                            </td>


                            <td>
                                <a href="actualizar.php?nro=<?php echo $key['nro']?>">Actualizar</a>
                            </td>
                            <td>
                                <a href="eliminar.php?nro=<?php echo $key['nro']?>">Eliminar</a>
                            </td>
                        </tr>
                    <?php
                        }
                    ?>

                    </table>
                </div>
            <div>
                <button id="regresar" onclick="location.href='index.php'">Home</button>
            </div>
        </body>
</html>   