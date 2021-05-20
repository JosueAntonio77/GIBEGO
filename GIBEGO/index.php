<?php
    session_start();

    if(isset($_SESSION['usuario'])){
        header("location: ****.php"); //archivo de la sig pagina
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GIBEGO PETS REGISTRO LOGIN</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>

    <main>
        <div class="contenedor__todo">

            <div class="caja__trasera">

                <div class="caja__trasera-login">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Inicia sesión</p>
                    <button id="btn__iniciar-sesion">Iniciar sesión</button>
                </div>
            
                <div class="caja__trasera-register">
                    <h3>¿Aun no tienes una cuenta?</h3>
                    <p>Registrate para iniciar</p>
                    <button id="btn__registrar">Registrate</button>
                </div>
            </div>
                <!--Formularios-->
            <div class="contenedor__login-register">
                    <!--Login-->
                <form action="php/login.php" method="POST" class="formulario__login">

                    <h2>Iniciar sesión</h2>
                    <input type="text" placeholder="E-mail" name = "correo">
                    <!--<input type="text" placeholder="Usuario" name = "usuario">-->
                    <input type="password" placeholder="Contraseña" name = "pass">
                    <button>Entrar</button>

                </form>

                    <!--Registro-->
                    <form action="php/registros.php" method="POST" class="formulario__register">

                        <h2>Registrarse</h2>
                        <input type="text" placeholder="Nombre(s)" name ="nombre">
                        <input type="text" placeholder="Apellido Paterno" name = "apellido_paterno">
                        <input type="text" placeholder="Apellido Materno" name = "apellido_materno">
                        <input type="text" placeholder="E-mail" name = "correo">
                        <input type="text" placeholder="Usuario" name = "usuario">
                        <input type="password" placeholder="Contraseña" name = "pass">
                        <button>Registrarse</button>

                    </form>

            </div>

        </div>

    
    </main>
    <script src="js/script_login.js"></script>
    
</body>
</html>