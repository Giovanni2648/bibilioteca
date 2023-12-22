<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de Biblioteca</title>
    <style>
        .sidebar {
            height: 100%;
            width: 250px;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #333; 
            color: white;
            padding-top: 20px;
        }

        .sidebar a {
            padding: 15px 25px;
            text-decoration: none;
            font-weight: bold;
            color: white;
            display: block;
        }

        .sidebar a:hover {
            background-color: #444; 
        }

        /* Contenido principal */
        .content {
            margin-left: 270px; /* Ancho del sidebar + espacio de margen */
            padding: 20px;
        }

        /* Estilos para la tabla */
        table {
            width: 100%;
            border-collapse: collapse;
            background-color: white;
        }

        th, td {
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #333; 
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2; 
        }

        /* Botones para agregar, editar y eliminar */
        .btn {
            margin-right: 5px;
        }
        footer{
            margin-top: 100px;
            background-color: #333;
            padding: 20px;
            text-align: center;

        }

    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    <?php
        session_start();

        // Verifica si el usuario ha iniciado sesión
        if (!isset($_SESSION["correo"])) {
            header("Location: login/login.html"); // Redirige a la página de inicio de sesión
            exit();
        }
    ?>

    <div class="sidebar">
        <h2>BIBLIOTECA</h2>
        <br>
        <a href="indexx.php?id=au#contenido">Autor</a>
        <a href="indexx.php?id=li#contenido">Libro</a>
        <a href="indexx.php?id=liau#contenido">Libro_Autor</a>
        <a href="indexx.php?id=usu#contenido">Usuario</a>
        <a href="indexx.php?id=pres#contenido">Prestamo</a>
        <a href="../cerrar_sesion.php">Cerrar Sesión</a>
    </div>
    <div class="container" id="contenido">
        <?php
        if (isset($_GET['id'])) {
            switch ($_GET['id']) {
                case 'au':
                    include("autor/listar.php");
                    break;

                case 'agre_au':
                    include("autor/agregar.php");
                    break;
                case 'li':
                    include("libro/listarlibro.php");
                    break;
                case 'agre_li';
                    include("libro/agregarlibro.php");
                    break;

                case 'usu':
                    include("usuario/listarusu.php");
                    break;
                case 'agre_usu';
                    include("usuario/agregarusu.php");
                    break;

                case 'pres':
                    include("prestamo/listarpres.php");
                    break;
                case 'agre_pres';
                    include("prestamo/agregarpres.php");
                    break;

                case 'liau':
                    include("libroautor/listarliau.php");
                    break;
                case 'agre_liau';
                    include("libroautor/agregarliau.php");
                    break;

                default:
                    # code...
                    break;
            }
            
        }
        ?>
    </div>
    <footer>
        <p style="color:white">ETP2023@gmail.com Sistema de Biblioteca</p>
    </footer>
    
    <script type="text/javascript">@import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css");</script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>