<?php
    class metodos{

        public function mostrar_Estudiante($sql){

            $c= new conectar();
            $conexion = $c->conexion();

            $resultado = mysqli_query($conexion,$sql);

            return mysqli_fetch_all($resultado,MYSQLI_ASSOC);
            
        }

        public function crear_Estudiante($datos){
            
            $c= new conectar();
            $conexion = $c->conexion();

            $sql="INSERT into 1a (nro,cedula,nombres,CAST1,CAST2,CAST3,ING1,ING2,ING3,MAT1,MAT2,MAT3,EF1,EF2,EF3,AP1,AP2
            ,AP3,CN1,CN2,CN3,GHC1,GHC2,GHC3,OYV1,OYV2,OYV3,PARG1,PARG2,PARG3) values ('$datos[0]','$datos[1]','$datos[2]','$datos[3]'
            ,'$datos[4]','$datos[5]','$datos[6]','$datos[7]','$datos[8]','$datos[9]','$datos[10]','$datos[11]','$datos[12]'
            ,'$datos[13]','$datos[14]','$datos[15]','$datos[16]','$datos[17]','$datos[18]','$datos[19]','$datos[20]','$datos[21]'
            ,'$datos[22]','$datos[23]','$datos[24]','$datos[25]','$datos[26]','$datos[27]','$datos[28]','$datos[29]')";

            return $resultado = mysqli_query($conexion,$sql);
        }

        public function actualizar_Estudiante($datos){

            $c= new conectar();
            $conexion = $c->conexion();

            $sql="UPDATE 1a set cedula='$datos[0]',nombres='$datos[1]',CAST1='$datos[2]',CAST2='$datos[3]',
            CAST3='$datos[4]',ING1='$datos[5]',ING2='$datos[6]',ING3='$datos[7]',MAT1='$datos[8]',MAT2='$datos[9]',
            MAT3='$datos[10]',EF1='$datos[11]',EF2='$datos[12]',EF3='$datos[13]',AP1='$datos[14]',AP2='$datos[15]',
            AP3='$datos[16]',CN1='$datos[17]',CN2='$datos[18]',CN3='$datos[19]',GHC1='$datos[20]',GHC2='$datos[21]',
            GHC3='$datos[22]',OYV1='$datos[23]',OYV2='$datos[24]',OYV3='$datos[25]',PARG1='$datos[26]',
            PARG2='$datos[27]',PARG3='$datos[28]' where nro='$datos[29]'";

            return $resultado = mysqli_query($conexion,$sql);
        }

        public function eliminar_Estudiante($nro){

            $c= new conectar();
            $conexion = $c->conexion();

            $sql="DELETE from 1a where nro='$nro'";

            return $resultado = mysqli_query($conexion,$sql);
        }

    }

?>