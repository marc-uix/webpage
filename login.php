<?php
session_start();
include("config/db.php");

if($_SERVER["REQUEST_METHOD"]=="POST"){

    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM usuarios WHERE username ='$username'";

    $result = mysqli_query($conn, $sql);

    $user = mysqli_fetch_assoc($result);

    if($user && password_verify($password, $user["password"])){

      $_SESSION['username'] = $username;    
      header("Cache-Control: no-cache, no-store, must-revalidate");
      header("Pragma: no-cache");
      header("Expires: 0");
      header("Location: mainweb.php");
        exit();
    }else{

        header("Location: login.php");
        exit();
    }
}
?>

<!DOCTYPE html>

<html lang="es">

<head>
    <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-K3X8JL2V');</script>
<!-- End Google Tag Manager -->
<!-- Google tag (gtag.js) -->
<!--<script async src="https://www.googletagmanager.com/gtag/js?id=G-V468777J51"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-V468777J51');
</script>-->
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login</title>

    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
</head>

<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K3X8JL2V"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    <section class="login-container">

        <div class="login-card">

            <h1>Iniciar Sesión</h1>

            <p>
                Ingresá tus datos para continuar
            </p>

            <form action="" method="POST" autocomplete="off">

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