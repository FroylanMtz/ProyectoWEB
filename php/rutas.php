<?php

class Modelo
{

    //Una funcion con el parametro $enlacesModel que se recibe a traves del controlador
    public function mostrarPagina($enlace){

        if($_SESSION['tipoUsuario'] != 'Socio'){
            
            // Posible paginas para los administradores
            if( $enlace == "dashboard" || 
                $enlace == "salir" ||
                $enlace == "consolas" || 
                $enlace == "agregar_consola" ||
                $enlace == "editar_consola" ||
                $enlace == "gamers" ||
                $enlace == "agregar_gamers" ||
                $enlace == "editar_gamer" ){
                //Mostramos el URL concatenado con la variable $enlacesModel
                $pagina = "Paginas/Administrador/". $enlace .".php";
            }
            //Una vez que action vienen vacio (validnaod en el controlador) enctonces se consulta si la variable $enlacesModel es igual a la cadena index de ser asi se muestre index.php
            else if($enlace == "index"){
                $pagina = "Paginas/Administrador/dashboard.php";
            }
            //Validar una LISTA BLANCA 
            else{
                $pagina = "Paginas/Administrador/dashboard.php";
            }

        }else{

            //Posible paginas para los socios
            if( $enlace == "dashboard_socio" ||
                $enlace == "salir" )
            {
                //Mostramos el URL concatenado con la variable $enlacesModel
                $pagina = "Paginas/Socio/". $enlace .".php";
            }
            //Una vez que action vienen vacio (validnaod en el controlador) enctonces se consulta si la variable $enlacesModel es igual a la cadena index de ser asi se muestre index.php
            else if($enlace == "index"){
                $pagina = "Paginas/Socio/dashboard_socio.php";
            }
            //Validar una LISTA BLANCA 
            else{
                $pagina = "Paginas/Socio/dashboard_socio.php";
            }

        }

        return $pagina;
    }

}