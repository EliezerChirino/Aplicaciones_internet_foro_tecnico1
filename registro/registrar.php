<?php
    include("conexion.php");

    if (isset ($_POST['register'])){

        if(
            strlen($_POST['nombre'])>= 1 &&
            strlen($_POST['apellido'])>= 1 &&
            strlen($_POST['cedula'])>= 1 &&
            strlen($_POST['selec'])>= 1 &&
            strlen($_POST['direccion'])>= 1 &&
            strlen($_POST['telefono'])>= 1 
            ){
                $nombre=trim($_POST['nombre']);
                $apellido=trim($_POST['apellido']);
                $cedula=trim($_POST['cedula']);
                $selec=trim($_POST['selec']);
                $direccion=trim($_POST['direccion']);
                $telefono=trim($_POST['telefono']);
                $fecha=date("d/m/y");
                $consulta="INSERT INTO datos(nombre, apellido, cedula, genero, direccion, telefono, fecha)
                    VALUES('$nombre', '$apellido', '$cedula', '$selec', '$direccion', '$telefono', '$fecha')";
                $resultado=mysqli_query($conex, $consulta);

                if ($resultado){
                    ?>

                    <h3 class="success mt-1">Su registro se ha completado</h3>

                    <?php
                } else{
                    ?>

                    <h3 class="error"> Ocurrió un error</h3>

                    <?php
                }
             } else{
                ?>

                <h3 class="error"> Llena todos los campos </h3>

                <?php
             }
    }


?>