<?php
    include 'conexion.php';

    $nombre = $_POST['nombre'];
    $apellido_paterno = $_POST['apellido_paterno'];
    $apellido_materno = $_POST['apellido_materno'];
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $pass = $_POST['pass'];

    //encriptar contraseña
    $pass = hash('sha512', $pass);

    //nombre de la tabla
    $query = "INSERT INTO usuarios(nombre, apellido_paterno, apellido_materno, correo, usuario, pass) 
     VALUES('$nombre', '$apellido_paterno', '$apellido_materno', '$correo', '$usuario', '$pass')";
     
     $ejecutar = mysqli_query($conexion, $query);

     //verificar que el correo no se repitan los datos
     $verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo' ");

     if(mysqli_num_rows($verificar_correo) > 0){
         echo '
            <script>
            alert("Este correo ya esta registrado, intenta con otro diferente");
            window.location = "../index.php";
            </script>
         ';
         exit;
     }

          //verificar que el usuario no se repitan los datos
          $verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario='$usuario' ");

          if(mysqli_num_rows($verificar_usuario) > 0){
              echo '
                 <script>
                 alert("Este usuario ya esta registrado, intenta con otro diferente");
                 window.location = "../index.php";
                 </script>
              ';
              exit;
          }


     if($ejecutar){
        echo '
            <script>
                alert("Usuario registrado correctamente");
                window.location = "../index.php";
            </script>
         ';
     }else{
        echo '
        <script>
            alert("Fallo al registrar el usuario");
            window.location = "../index.php";
        </script>
     ';
     }

     mysqli_close($conexion);

?>