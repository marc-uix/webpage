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
<h1>Registro</h1>

<p>Por favor proceda a registrarse:</p>

<form action="" method="POST">
    <input type="text" name="username" placeholder="usuario" required>
    <br><br>
    <input type="email" name="email" placeholder="Email" required>
    <br><br>
    <input type="password" name="password" placeholder="password" required>
    <br><br>
    <button type="submit">Registrarse</button>
</form>
</body>
</html>