<?php

$controlador = new Controlador();

$datosTorneo = array();
$datosTorneo = $controlador -> obtenerDatosTorneo();


$datosJuegos = array();
$datosJuegos = $controlador->obtenerDatosJuegos();

?>


<section class="content-header">
    <h1>
        Editar Torneo
    </h1>
        <br>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Torneos </a></li>
        <li class="active">Editar torneo</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">

<div class="row">

    <div class="col-md-10">

        <!-- general form elements -->
        <div class="box box-primary">

            <div class="box-header with-border">
                <h3 class="box-title">Edite los datos del socio gamer</h3>
            </div>

            <form role="form" method='post' >
                
                <div class="box-body">


                <div class="form-group">
                        <label for="tituloTorneo">Titulo del torneo: </label>
                        <input type="text" class="form-control" name="tituloTorneo" placeholder="Titulo del torneo" value="<?= $datosTorneo[0]['tituloTorneo'] ?>">
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
                        <input type="text" placeholder="Fecha del torneo" class="form-control" id="datepicker" name="fecha" value="<?= $datosTorneo[0]['fecha'] ?>">
                    </div>
                    
                    
                    <div class="form-group">
                        <label for="hora">Hora: </label>
                        <input type="text" placeholder="Hora del torneo" name="hora" class="form-control timepicker" value="<?= $datosTorneo[0]['hora'] ?>">
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
                        <input type="number" id="totalJugadores" placeholder="Total jugadores" name="totalJugadores" value="<?= $datosTorneo[0]['cantidad_jugadores'] ?>">
                    </div>


                    <div class="form-group">
                        <label for="descripcion">Descripcion:</label>
                        <input type="text" id="totalJugadores" placeholder="Descripcion del torneo" name="descripcion" class="form-control timepicker" value="<?= $datosTorneo[0]['descripcion'] ?>">
                    </div>

                

                    </div>
                        <div class="box-footer">
                        <center> <button type="submit" class="btn btn-primary">Guardar Datos</button> </center>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>

</section>


<?php
if(isset($_POST['tituloTorneo'])){   
    $controlador -> editarDatosTorneo();
}
?>