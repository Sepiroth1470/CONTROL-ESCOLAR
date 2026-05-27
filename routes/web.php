<?php
session_start();
include("conexion.php");

if(isset($_POST['login'])){

    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    $query = "SELECT * FROM usuarios 
              WHERE usuario='$usuario' 
              AND password='$password'";

    $resultado = mysqli_query($conn,$query);

    if(mysqli_num_rows($resultado) > 0){

        $datos = mysqli_fetch_assoc($resultado);

        $_SESSION['usuario'] = $datos['nombre'];
        $_SESSION['rol'] = $datos['rol'];

        header("Location: index.php");

    }else{
        echo "Datos incorrectos";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-dark">

<div class="container mt-5">

    <div class="card p-4">

        <h2 class="text-center">Sistema Escolar</h2>

        <form method="POST">

            <input type="text" name="usuario" class="form-control mb-3" placeholder="Usuario">

            <input type="password" name="password" class="form-control mb-3" placeholder="Contraseña">

            <button type="submit" name="login" class="btn btn-primary w-100">
                Ingresar
            </button>

        </form>

    </div>

</div>

</body>
</html>
