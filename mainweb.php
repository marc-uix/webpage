<?php

session_start();

header("Cache-Control: no-cache, no-store, must-revalidate");
header("Pragma: no-cache");
header("Expires: 0");

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
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
    <title>web-page-main</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <script src="js/app.js"></script>
</head>
<body>
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K3X8JL2V"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
 
    <header class="header-container">
         <div class="profile">
        <a href="profile.php" class="btn">Perfil</a>
    </div>
    <div class="header-top">
        <h1 class="title">impresoras 3d</h1>
        <p class="logo">Mi Proyecto</p>
    </div>
    <nav class="nav-links">
        <a href="index.php" class="btn">Inicio</a>
        <a href="login.php" class="btn">Login</a>
        <a href="register.php" class="btn">Registro</a>     
    </nav>
    </header>
<section class="main-content">

    <h2>Productos</h2>

    <div class="products">

        <div class="product-card">
            <h3>Producto 1</h3>
            <p>Descripción del producto</p>
        </div>

        <div class="product-card">
            <h3>Producto 2</h3>
            <p>Descripción del producto</p>
        </div>

        <div class="product-card">
            <h3>Producto 3</h3>
            <p>Descripción del producto</p>
            <button class="hero-buy-btn">Comprar</button>
        </div>

    </div>
</section>

<section class="footer">
    <a class="hero-btn" href="logout.php">Cerrar Sesión</a>
</section>


</body>
</html>