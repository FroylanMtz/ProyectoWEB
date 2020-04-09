<?php
//Se instancia a un objeto de l clase controlador para que se manden llamar todos los metodo que cominican a la vista con el controlador
$controlador = new Controlador();

//Se crean dos arreglos para recibir la informacion de las carreras y los tutores
$datosPlataformas = array();

//Se mandan llamar los metodos que traen estos datos, estos retornan un arreglo asociativo, esta informacion sera desplegada en los campos del formulario en donde se necesite mostrar los datos de la tabla que existen
$datosPlataformas = $controlador -> obtenerDatosPlataformas();

?>

<?php
    if(isset($_GET['e']) ){

        if($_GET['e'] == 'camposVacios'){
            echo " <!-- Sweet alert -->
            <script> Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'Debe llenar todos los campos'
                }) </script> ";
        }

        if($_GET['e'] == 'successGuardar'){
            echo " <!-- Sweet alert -->
            <script> Swal.fire({
                icon: 'success',
                title: 'Guardado con exito',
                text: 'Consola guardado con exito'
                }) </script> ";
        }

        if($_GET['e'] == 'errorGuardar'){
            echo " <!-- Sweet alert -->
            <script> Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'Hubo un erorr al guardar los datos'
                }) </script> ";
        }

    }
?>


<section class="content-header">
    <h1>
        Agregar Socio Gamer
    </h1>
    
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Socios Gamers </a></li>
        <li class="active"> Agregar Socio Gamer </li>
    </ol>
</section>

<!-- Main content -->
<section class="content">


<div class="row">

    <div class="col-md-12">

        <!-- general form elements -->
        <div class="box box-primary">

            <div class="box-header with-border">
                <h3 class="box-title">Agregue los datos de la persona</h3>
            </div>

            <!-- /.box-header -->
            <!-- form start -->
            <form method="POST" enctype="multipart/form-data">
                
                <div class="box-body">



                <div class="form-group has-feedback">
                    <input type="text" class="form-control" placeholder="Nombre completo" name="nombre">
                </div>

                <div class="form-group has-feedback">                                             
                    <input type="text" placeholder="Fecha de nacimiento" class="form-control" id="datepicker" name="fecha">
                </div>

                <div class="form-group has-feedback">
                    <input type="text" class="form-control" placeholder="Gamer Tag" name="tag">
                </div>

                <div class="form-group has-feedback">
                    <input type="text" class="form-control" placeholder="Telefono" name="telefono">
                </div>

                <div class="form-group has-feedback">
                    <select class="form-control" placeholder="Sexo" name="sexo"> 
                        <option value="M"> Masculino </option>
                        <option value="F"> Femenino </option>
                    </select>
                </div>

                <div class="form-group has-feedback">
                    <input type="email" class="form-control" placeholder="Correo Electronico" name="correo">
                </div>
        
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" placeholder="Contraseña" name="contrasena">
                </div>

                <div class="form-group has-feedback">
                    <input type="password" class="form-control" placeholder="Repite contraseña" name="repContrasena">
                </div>
                

                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                <center> <input type="submit" class="btn btn-primary btn-lg btn-block" value="Guardar datos del socio" /> </center>
                </div>
                
            </form>

        </div>
        <!-- /.box -->
    </div>
</div>
<!-- /.row -->

</section>

<?php

//Compara si la variable exista, para que cuando entre sin que se le haya pulsado al boton esto no se accione y trate de hacer algo, eso solo se habilitara cuando el usaurio de click en el boton, es lo que significa
if(isset($_POST['nombre']) ){
    
    //Funcion del controlador que permite la lecutra de todas las variables del formulario para reunirlas en un objeto y posteriormente pasarlas al modelo apra que la almacene
    $controlador ->  guardarDatosConsola();

    

}

?>