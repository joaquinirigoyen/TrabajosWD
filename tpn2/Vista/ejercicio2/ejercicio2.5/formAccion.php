<?php
include_once '../../../configuracion.php';

$datos = data_submitted();
$obj = new DatosPersona();
$cadenaDatos = $obj->datosPersonales($datos);

$tituloPagina = "Ejercicio 2.5 del TP2";
$tp = "botonTP2";
$ejercicio = "botonEjer2";
$tp2ej2Ejercicio = "TP2EJ2botonEjer5";

include_once('../estructura/encabezado.php');
?>

<div class="contenedorCentrado">
    <?php
    echo $cadenaDatos;
    ?>
    <div id="contieneLinkVolver">
        <a href="formulario.php" id="linkVolver">Volver</a>
    </div>
</div>

<?php
include_once('../estructura/pie.php');
?>