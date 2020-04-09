<?php

//Invocamos el modelo que se utilizará en todos los archivos
require_once('php/rutas.php');
require_once('php/crud.php');
require_once('php/funciones.php');


//Para poder ver el template o plantilla, se hace una peticion mediante a un controlar
//creamos el objeto:
$controlador = new Controlador();

//Muestra la funcion "plantilla" que se encuentra en controllers/controller
$controlador->cargarPlantilla();


?>