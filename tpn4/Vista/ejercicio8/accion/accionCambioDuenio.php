<?php
    $tituloPagina = "Ejercicio 8 del TP4";
    $tp = "botonTP4";
    $ejercicio = "botonEjer8";
    $rutaEstructura = "../../";
    $correccionRuta = "2";

    include_once('../../estructura/encabezado.php');
    include_once("../../../configuracion.php");

    $metodo = data_submitted();

    $objAuto = new AbmAuto();
    $objPersona = new AbmPersona();

    $busqueda['Patente'] = $metodo['Patente'];

    $datosAuto = $objAuto->buscar($busqueda);

    $nroDni["NroDni"] = $metodo["DniDuenio"];
    $datosPersona = $objPersona->buscar($nroDni);
?>

    <div class="contenedorCentrado">
        <strong> Cambio de Dueño</strong>
        <div class="container-fluid">
            <div class="container col-md-10">
                <h2>Resultado la busqueda:</h2>
                <div class="mb-3">
                    <?php
                    if ($datosAuto != null) {
                        if ($datosPersona != null) {
                            $datosModificados = ["Patente" => $metodo["Patente"], "DniDuenio" => $metodo["DniDuenio"], "Marca" => $datosAuto[0]->getMarca(), "Modelo" => $datosAuto[0]->getModelo()];
                            if ($objAuto->modificacion($datosModificados)) {
                                echo '<p class="lead text-success"> Los datos se modificaron correctamente!</p>';
                            } else {
                                echo '<p class="lead text-danger"> Es el mismo dueño!</p>';
                            }
                        } else {
                            echo '<p class="lead text-danger"> La persona no se encuentra en la base de datos!</p>';
                        }
                    } else {
                        echo ' <p class="lead text-danger">El auto no se encuentra en la base de datos!</p>';
                    }
                    ?>
                </div>
                <div>
                    <div class="mb-3">
                        <a href="../cambioDuenio.php" class="btn btn-dark">Volver</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
    include_once('../../estructura/pie.php');
?>