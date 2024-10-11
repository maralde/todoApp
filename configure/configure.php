<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$servername = "localhost";
$username = "Marcos";
$password = "DAW2425";
$dbname = "todo";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);

}

$styles = '
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <style>
        /* Cambiar colores a verde */
        .bg-green {
            background-color: #28a745;
            /* Verde Bootstrap */
        }

        .text-green {
            color: #28a745;
            /* Verde Bootstrap */
        }

        .btn-green {
            background-color: #28a745;
            color: white;
        }

        .btn-blue {
            background-color: lightblue;
        }

        .btn-green:hover {
            background-color: #218838;
            color: white;
        }
    </style>';

$navCreacion = ' <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Mi Aplicación</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="../login.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./creaTarea.php">creacion Tarea</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../prueba.php">prueba</a>
                    </li>
                    <li class="nav.item">
                        <a class="nav-link" href="../configure/cerrarSesion.php">Log out</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>';

$navMain = ' <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Mi Aplicación</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="./login.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./creacion/creaTarea.php">Creacion Tarea</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./prueba.php">prueba</a>
                    </li>
                    <li class="nav.item">
                        <a class="nav-link" href="./configure/cerrarSesion.php">Log out</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>';