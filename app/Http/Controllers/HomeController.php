<?php

class HomeController
{
    public function index()
    {
        echo "<h1>Sistema de Control Escolar</h1>";
        echo "<h2>Menú principal</h2>";

        echo "<ul>";
        echo "<li><a href='#'>Alumnos</a></li>";
        echo "<li><a href='#'>Profesores</a></li>";
        echo "<li><a href='#'>Administrativos Nivel A</a></li>";
        echo "<li><a href='#'>Administrativos Nivel B</a></li>";
        echo "<li><a href='#'>Director de Carrera</a></li>";
        echo "<li><a href='#'>Secretario Académico</a></li>";
        echo "</ul>";
    }
}

$home = new HomeController();
$home->index();
