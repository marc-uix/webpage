<?php

include("config/db.php");

if($_SERVER["REQUEST_METHOD"]=="POST"){

    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM usuarios WHERE username ='$username'";

    $result = mysqli_query($conn, $sql);

    $user = mysqli_fetch_assoc($result);

    if($user && password_verify($password, $user["password"])){

        echo "<script>
        alert('Bienvenido $username');
        window.location.href='mainweb.php';
        </script>";

    }else{

        echo "<script>
        alert('Nombre de usuario o contraseña incorrectos');
        window.location.href='login.php';
        </script>";
    }
}
?>

<!DOCTYPE html>

<html lang="es">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login</title>

    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <section class="login-container">

        <div class="login-card">

            <h1>Iniciar Sesión</h1>

            <p>
                Ingresá tus datos para continuar
            </p>

            <form action="" method="POST">

                <input 
                    type="text" 
                    name="username" 
                    placeholder="Usuario"
                    required
                >

                <input 
                    type="password" 
                    name="password" 
                    placeholder="Contraseña"
                    required
                >

                <button type="submit" class="hero-btn">
                    Ingresar
                </button>

            </form>

        </div>

    </section>

</body>

</html>