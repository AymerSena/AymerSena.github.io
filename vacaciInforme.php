<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/disInforVacas.css">
</head>
<body>
<header id="encabezado">
        <a href=""><img id="logo-header" src="https://1.bp.blogspot.com/-CRGFBvE8s8k/YT5yRhIEj8I/AAAAAAAAAHM/dplt4qgxJmcjfSP213rWRyF0EoW_BQlSACNcBGAsYHQ/s320/logoPag.png"></a>
        <img id="foto_perfil" src="https://1.bp.blogspot.com/-MeCxaLO8njU/YT5yRMu7KrI/AAAAAAAAAHI/NhoZIlmquMUWDoiVjAzF3nTF1WnwqRTSQCNcBGAsYHQ/s0/descarga.png">
        <nav>
            <ul>
                <li>
                    <a href=""><img id="notificacion" src="https://1.bp.blogspot.com/-EO10WM7B0Ig/YT5yOT5S7JI/AAAAAAAAAGw/FfqaAQ19Y709UTCC9jBUt7CW9pEv8_xjACNcBGAsYHQ/s0/IconoNotificaciones.png"></a>
                </li>
                <li>
                    <a href="Index.php"><img id="cerrarSe" src="https://1.bp.blogspot.com/-BM03tlw4TH0/YT5yOxEwdoI/AAAAAAAAAG0/LneMrf5vRD0ooVH6n92poAdrIa8balaRACNcBGAsYHQ/s0/IconoSalir.png"></a>
                </li>
            </ul>
        </nav>
        <h1> Bienvenido </h1>
        <h3> Nombre Apellido </h3><br>
        <div id="animacion"></div>
</header>
<blockquote>
<h1 id="titleTable">Tabla de consulta de vacaciones</h1>    
<form action="" method="POST">
    <select name="filterPeople" id="">
        <option value="all">Seleccionar todo</option>
        <?php
        require("conexionBD.php");
        $queryBdJub="SELECT UsuCedula, UsuNombre, UsuApellido FROM tblusuario;";
        $answerQueSql=$conexion->query($queryBdJub);
        foreach($answerQueSql as $rowsCol){
        ?>
        <option value="<?php echo $rowsCol['UsuCedula']; ?>"><?php echo $rowsCol['UsuNombre'].' '.$rowsCol['UsuApellido']?></option>
        <?php
        }
        ?>
    </select>
    <input type="submit" value="Consultar" name="boton">
</form><br>
<table id="tablaResu">
    <tr>
        <th>Empleado</th>
        <th>Fecha solicitud</th>
        <th>Fecha de inicio</th>
        <th>Fecha fin</th>
        <th>Estado</th>
    </tr>

<?php
if (isset($_POST['boton'])) {
    echo $_POST['filterPeople'] .' Se cumple la condición del boton';
    if ($_POST['filterPeople']=="all") {
        $whereSql="";
    }else {
        $document=$_POST['filterPeople'];
        $whereSql="WHERE usu.UsuCedula=$document";
    }
}else{
    $whereSql="";
}
$sql="SELECT his.HisFechaSolicitud, his.HisFechaInicio, his.HisFechaRegreso, his.HisEstado, usu.UsuNombre, usu.UsuApellido FROM tblhistovaca his INNER JOIN tblusuario usu ON his.HisForUsuCed=usu.UsuCedula $whereSql";
$answTableSql=$conexion ->query($sql);
foreach($answTableSql as $rowsTable){
    ?>
    <tr>
        <td><?php echo $rowsTable['UsuNombre']. ' '.$rowsTable['UsuApellido'];?></td>
        <td><?php echo $rowsTable['HisFechaSolicitud'];?></td>
        <td><?php echo $rowsTable['HisFechaInicio'];?></td>
        <td><?php echo $rowsTable['HisFechaRegreso'];?></td>
        <td><?php echo $rowsTable['HisEstado'];?></td>
    </tr>
<?php
}
?>
</table>
</blockquote>

</body>

}
</html>