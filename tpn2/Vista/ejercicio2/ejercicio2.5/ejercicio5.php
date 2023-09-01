<?php 
    $tituloPagina = "Ejercicio 2.5 del TP2";
    $tp = "botonTP2";
    $ejercicio = "botonEjer2";
    $tp2ej2Ejercicio = "TP2EJ2botonEjer5";
    
    include_once('../estructura/encabezado.php');
?>
            <!-- 
                tp1 ejercicio 5
                Modificar el formulario del ejercicio anterior solicitando, tal que usando componentes 
                “radios buttons” se ingrese el nivel de estudio de la persona: 1-no tiene estudios, 2-
                estudios primarios, 3-estudios secundarios. Agregar el componente que crea más
                apropiado para solicitar el sexo. En la página que procesa el formulario mostrar además
                un mensaje que indique el tipo de estudios que posee y su sexo.
            -->

            <div class="contenedorEnunciado">
                Complete los datos del formulario
            </div>

            <div class="contenedorCentrado">
                <form name="form" id="form" method="get" action="formAccion5.php" novalidate>
                    <table>
                        <tr>
                            <td>Nombre:</td>
                            <td><input type="text" name="nombreForm" id="nombreForm"  minlength="3" required></td>
                        </tr>
                        <tr>
                            <td>Apellido:</td>
                            <td><input type="text" name="apellidoForm" id="apellidoForm"  minlength="3" required></td>
                        </tr>
                        <tr>
                            <td>Edad:</td>
                            <td><input type="number" name="edadForm" id="edadForm" min="0" required></td>
                        </tr>
                        <tr>
                            <td>Dirección:</td>
                            <td><input type="text" name="direccionForm" id="direccionForm" required></td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                Indique su nivel de estudios
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <input type="radio" name="estudios" id="estudios1" value="noTiene" required> No tiene estudios
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <input type="radio" name="estudios" id="estudios2" value="primarios"> Estudios primarios
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <input type="radio" name="estudios" id="estudios3" value="secundarios"> Estudios secundarios
                            </td>
                        </tr>
                        <tr>
                        <td>Sexo:</td>
                            <td>
                                <select id="sexoForm" name="sexoForm">
                                    <option value=""></option>
                                    <option value="masculino">Masculino</option>
                                    <option value="femenino">Femenino</option>
                                    <option value="otro">Otro</option>
                                </select>
                            </td>
                        </tr>
                    </table>
                    <input type="submit" name="Submit" value="Enviar" class="botonFormulario">
                </form>
            </div>

<?php
    include_once('../estructura/pie.php');
?>