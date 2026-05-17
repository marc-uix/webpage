<?php
include("config/db.php");
if($_SERVER["REQUEST_METHOD"]=="POST"){

    $username=$_POST["username"];
    $email=$_POST["email"];
    $password=password_hash($_POST["password"],
PASSWORD_DEFAULT);

$sql="INSERT INTO usuarios(username,email,password)
    Values('$username','$email','$password')";

if(mysqli_query($conn,$sql)){
    echo "<script>
    alert('registrado correctamente!');
    window.location.href= 'index.php';
    </script>";
}else{
    echo "error al registrar";
}

}
?>
<!DOCTYPE html>

<html lang="es">

<head>

<meta charset ="UTF-8">

<link rel="stylesheet" href="css/style.css">
</head>
<body>
<section class="register-container">
    <div class="register-card">
        <h1>Registro</h1>
        <p>
            Ingresá tus datos para registrarte
        </p> 

<form action="" method="POST" class="register-form">

    <input type="text" name="username" placeholder="usuario" required>
  
    <input type="email" name="email" placeholder="Email" required>
    
    <input type="password" name="password" placeholder="password" required>
  
    <button type="submit" class="hero-btn">Registrarse</button>

</form>
</div>
</section>
</body>
</html>