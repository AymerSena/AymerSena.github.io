<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/Index.css">
    <title>Login</title>
</head>

<body>
    <header id="encabezado">
        <img id="logo-header" src="https://1.bp.blogspot.com/-CRGFBvE8s8k/YT5yRhIEj8I/AAAAAAAAAHM/dplt4qgxJmcjfSP213rWRyF0EoW_BQlSACNcBGAsYHQ/s320/logoPag.png">
    </header>
    <section id="Login">
        <h1>Inicio de sesión</h1>
        <form  method="POST">
            <input type="text" placeholder="Usuario" name="Usuario"><br><br>
            <input type="password" placeholder="Contrasena" name="Contrasena"><br><br>
            <button id="boton" type="submit" name="Iniciarsesion">Iniciar sesión</button><br><br>
            <p>Restablecer contraseña</p>
        </form>
    </section><br><br>
    <div id="Enlaces">
        <ul>
            <li><a href="menuAdministrador.html">Login como administrador</a></li>
            <li><a href="menuEmpleado.html">Login como empleado</a></li>
            <li><a href="menuJefe.html">Login como jefe</a></li>
            <li><a href="conexionBD.php">Validar la conexion a la base de datos</a></li>
        </ul>
    </div>
    <?php
        require("conexionBD.php");
        if(isset($_POST['Iniciarsesion'])){
            $docu=$_POST['Usuario'];
            $contra=$_POST['Contrasena'];
            echo $docu. ' ' . $contra;
            $sql="SELECT * FROM tblusuario WHERE UsuCedula='$docu'";
            $resultado= $conexion->query($sql);
            foreach($resultado as $rows){
            echo ' '. $rows['UsuContrasenaSis'];
            
        }
        }
    ?>
</body>

</html>