<?php

$usuario_correcto = "admin";
$password_correcta = "1234";

$usuario = $_POST["usuario"] ?? "";
$password = $_POST["password"] ?? "";

if ($usuario === $usuario_correcto && $password === $password_correcta) {
    header("Location: bienvenido.php");
    exit();
} else {
    echo "Usuario o contraseña incorrectos.";
    echo "<br><a href='login.html'>Volver al login</a>";
}

?>
```
