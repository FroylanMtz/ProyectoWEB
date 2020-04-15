<?php
$controlador = new Controlador();


$datosJuegos = array();
$datosJuegos = $controlador->obtenerDatosJuegos();

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
        Agregar torneo
    </h1>
    
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Torneos </a></li>
        <li class="active">Agregar Torneo</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">


<div class="row">

    <div class="col-md-12">

        <!-- general form elements -->
        <div class="box box-primary">

            <div class="box-header with-border">
                <h3 class="box-title">Agregue los datos de la consola</h3>
            </div>

            <!-- /.box-header -->
            <!-- form start -->
            <form method="POST" enctype="multipart/form-data">
                
                <div class="box-body">

                    <div class="form-group">
                        <label for="tituloTorneo">Titulo del torneo: </label>
                        <input type="text" class="form-control" name="tituloTorneo" placeholder="Titulo del torneo">
                    </div>

                    <div class="form-group">
                        <label for="juego">Juego: </label>
                        <select class="form-control" name="juego">
                            <?php
                                for($i = 0; $i < count($datosJuegos); $i++ ){
                                    echo '<option value="'.$datosJuegos[$i]['id'].'"> '. $datosJuegos[$i]['titulo'] .' </option>';
                                }
                            ?>
                        </select>
                    </div>

                    <div class="form-group ">
                        <label for="fecha">Fecha: </label>                                            
                        <input type="text" placeholder="Fecha del torneo" class="form-control" id="datepicker" name="fecha">
                    </div>
                    
                    
                    <div class="form-group">
                        <label for="hora">Hora: </label>
                        <input type="text" placeholder="Hora del torneo" name="hora" class="form-control timepicker">
                    </div>


                    <div class="form-group">
                        <label for="modalidad">Modalidad: </label>
                        <select class="form-control" name="modalidad">
                            <option value="Presencial"> Presencial </option>
                            <option value="online"> Online </option>
                        </select>
                    </div>

                    
                    <div class="form-group">
                        <label for="forma">Forma: </label>
                        <select class="form-control" name="forma" id="forma">
                            <option value="equipo"> Por equipos </option>
                            <option value="individual"> Individual </option>
                        </select>
                    </div>
                                
                    <div class="form-group">
                        <label for="totalJugadores">Cantidad jugadores:</label>
                        <input type="number" id="totalJugadores" placeholder="Total jugadores" name="totalJugadores" class="form-control timepicker">
                    </div>


                    <div class="form-group">
                        <label for="descripcion">Descripcion:</label>
                        <input type="text" id="totalJugadores" placeholder="Descripcion del torneo" name="descripcion" class="form-control timepicker">
                    </div>

                </div>
                <div class="box-footer">
                <center> <input type="submit" class="btn btn-primary btn-lg btn-block" value="Guardar datos del torneo" /> </center>
                </div>
            </form>
        </div>
    </div>
</div>
</section>


<?php
if(isset($_POST['tituloTorneo']) ){
    $controlador ->  guardarDatosTorneo();
}
?>