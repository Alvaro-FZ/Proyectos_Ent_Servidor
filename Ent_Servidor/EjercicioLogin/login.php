<?php
    session_start();
    include 'roles.php';
    //1.- Obtener credenciales
    $username = $_POST["username"]; // Nombre de usuario ingresado
    $contrasenya = $_POST["password"]; // Contraseña de usuario ingresado
    $usuarioValido = false;
    
    //2.- Verificación de las credenciales
    foreach ($usuarios as $usuario => $valor) { // Recorre la BBDD (en este caso es un array asociativo)
        if ($usuario == $username && $valor['password'] == $contrasenya) { // comprueba el usuario y contraseñas con los inputs
            $usuarioValido = true;
        }
    }

    //3.- Redirigir según el rol
    if ($usuarioValido && $username == "admin") { //Si es administrador
        header('Location: admin.php');
    }
    
    elseif ($usuarioValido && $username == "user") { //si es usuario normal
        header('Location: user.php');
    }
    
    elseif ($usuarioValido && $username == "manager") { //si es usuario normal
        header('Location: manager.php');
    }

    else { //si no es ninguno de los dos
        echo "Usuario o contraseña incorrectos.";
    }

?>