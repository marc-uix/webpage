<!DOCTYPE HTML>

<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil de Usuario</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <div class="container nav">
            <h1 class="logo">MiProyecto</h1>

            <nav class="nav-links">
                <a href="index.php" class ="btn">Inicio</a>
                <a href="logout.php" class="btn">Cerrar Sesión</a>
            </nav>
        </div>
    </header>

    <section class="profile">
        <div class="container">
            <h2>Bienvenido, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h2>
            <p>Este es tu perfil de usuario.</p>
        </div>
    </section>