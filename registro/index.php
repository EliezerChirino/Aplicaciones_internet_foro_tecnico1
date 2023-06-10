<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos_form.css">
</head>

<body>
    <section class="mt-5">
         <form method="post">  
            <div class="logo ">
                <img src="img/logo_tarea-removebg-preview.png" alt="" >
            </div> 
            <div class="contenedor">

            <div class="text-center texto fs-1 fw-bold">Registro de cliente</div>
                
                <div class="input-group mt-4">
                    <div class="input-group-text">
                        <i class="bi bi-person-circle" style="height: 1rem; margin-bottom: 10px;" ></i>
                    </div>
                    <input class="form-control" type="text" placeholder="Nombre del cliente"  id="user" name="nombre" required  >
                </div>

                <div class="input-group mt-4">
                    <div class="input-group-text">
                        <i class="bi bi-person-circle" style="height: 1rem; margin-bottom: 10px;" ></i>
                    </div>
                    <input class="form-control" type="text" placeholder="Ingrese el apellido del cliente"  id="apellido" name="apellido" required  >
                </div>

                <div class="input-group mt-4">
                    <div class="input-group-text">
                        <i class="bi bi-person-circle" style="height: 1rem; margin-bottom: 10px;" ></i>
                    </div>
                    <input class="form-control" type="number" placeholder="Ingrese la cedula de identidad del cliente"  id="cedula" name="cedula" required  >
                </div> 
                <h6 class="mt-3 mb-0">selecione el genero del cliente:</h6>
                <div class="input-group mt-1">
                   <div class="input-group-text">
                        <i class="bi bi-person-circle" style="height: 1rem; margin-bottom: 10px;" ></i>
                    </div>
                    
                    <select class="form-select" id="selec" name="selec" > 
                        <option value="Masculino">Masculino</option>
                        <option value="Femenino">Femenino</option>
                      </select>
                </div>

                <div class="input-group mt-4">
                    <div class="input-group-text">
                        <i class="bi bi-compass" style="height: 1rem; margin-bottom: 10px;" ></i>
                    </div>
                    <input class="form-control" type="text" placeholder="Ingrese la dirección del cliente"  id="direccion" name="direccion" required  >
                </div>

                <div class="input-group mt-4">
                    <div class="input-group-text">
                        <i class="bi bi-telephone" style="height: 1rem; margin-bottom: 10px;" ></i>
                    </div>
                    <input class="form-control" type="number" placeholder="Ingrese el numero de telefono"  id="telefono" name="telefono" required  >
                </div>

                <input type="submit" name="register" value="Enviar" class="btn btn-primary text-white w-100 mt-3" >
            </div>
         </form>

         <?php
            include("registrar.php");
         ?>
        </section>
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>