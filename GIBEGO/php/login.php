<?php
    session_start();
    include 'conexion.php';

    //$usuario = $_POST['usuario'];
    $correo = $_POST['correo'];
    $pass = $_POST['pass'];
    $pass = hash('sha512', $pass);

    //podemos cambiar en vez de correo a usuario y comentar el otro para que solo pueda iniciar con usuario
    /*
    $validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario = '$usuario' 
    and pass = '$pass' ");
    */
    $validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo = '$correo' 
    and pass = '$pass' ");

    if(mysqli_num_rows($validar_login) > 0){
        $_SESSION['usuario'] = $correo; // $_SESSION['usuario'] = $usuario;
        header("location: ../*****.php"); //para entrar a la siguiente pagina
        exit;
    }else{
        echo '
            <script>
            alert("Usuario no existe, por favor verifique sus datos");
            window.location = "../index.php";
            </script>
         ';
         exit;
    }

    //este codigo va en la sig pagina para que no inicie
    /*
    <?php
        session_start();

        if(!isset($_SESSION['usuario'])){
            echo '
            <script>
            alert("Por favor debes de iniciar sesión");
            window.location = "index.php";
            </script>
            ';
            session_destroy();
            die();
        } 

        
    ?>
    accion para cerrar cession
    <a href="php/cerrar_sesion.php">Cerrar sesión</a>
    */

?>