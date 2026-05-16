<?php

include("db.php");
if($_SERVER["REQUEST_METHOD"]=="POST"){

    $username=$_POST["username"];
    $password=password_hash($_POST["password"],PASSWORD_DEFAULT);

}

?>

<!DOCTYPE HTML>

<HTML lang ="es">

<head>
<meta charset ="utf-8">
<script src="app.js"></script>
<link rel="stylesheet" href="css/style.css">
</head>
<body>  
<h1>INICIE SESION</h1>

<form action="" method="POST">
    <input type="text" name="username" placeholder="username" required>
    <br><br>
    <input type="password" name="password" placeholder="contraseña" required>
    <br><br>
</form> 
</body>
