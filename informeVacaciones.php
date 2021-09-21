<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/disInforVacas.css">
    <title>Informe de vacaciones</title>
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
                    <a href="index.html"><img id="cerrarSe" src="https://1.bp.blogspot.com/-BM03tlw4TH0/YT5yOxEwdoI/AAAAAAAAAG0/LneMrf5vRD0ooVH6n92poAdrIa8balaRACNcBGAsYHQ/s0/IconoSalir.png"></a>
                </li>
            </ul>
        </nav>
        <h1> Bienvenido </h1>
        <h3> Nombre Apellido </h3><br>
        <div id="animacion"></div>
    </header>
    <br>
    <div id="Post">
        <form action="informe_vacaciones.php" method="POST">
            <label for="empleado">Empleado</label>
            <select name="ftl" id="filtros">
                    <option value="Todos los del área">Todos los del área</option>
                    <option value="Pepito Perez">Pepito Perez</option>
                    <option value="Mara Sandoval">Mara Sandoval</option>
                </select>
            <label for="inicioCalendarioVacas">Rango de fecha incio</label>
            <input type="date" name="IniCalVac">
            <label for="finCalendarioVacas">Rango de fecha fin</label>
            <input type="date" name="FinCalVac"><br>
            <table id="tablaResu" border="1">
                <tr>
                    <td>Empleado</td>
                    <td>fecha solicitud</td>
                    <td>Fecha de inicio</td>
                    <td>fecha fin</td>
                    <td>Estado</td>
                </tr>
                <tr>
                    <td>Pepito Perez</td>
                    <td>20210901</td>
                    <td>20210910</td>
                    <td>20210925</td>
                    <td>Aprobado</td>
                </tr>
                <tr>
                    <td>Mara Sandoval</td>
                    <td>20211001</td>
                    <td>20211010</td>
                    <td>20210925</td>
                    <td>Rechazada</td>
                </tr>
                <tr>
                    <td>Mara Sandoval</td>
                    <td>20201001</td>
                    <td>20201010</td>
                    <td>20200925</td>
                    <td>Aprobado</td>
                </tr>
            </table>
            <br>
            <input type="submit" value="Consultar" id="botonEN">
            <input type="submit" value="Imprimir" id="botonEN">
        </form>
    </div>

    </div>
</body>

</html>