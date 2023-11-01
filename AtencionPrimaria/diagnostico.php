<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Diagnóstico</title>
  <link rel="stylesheet" href="style.css">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <script type="text/javascript" src="multiselect-dropdown.js"></script>
    <style type="text/css">
        select{
            width: 30em;
        }
    </style>

</head>
<header class="header">
    <nav>
        <ul class="nav-links">
            <li><a href="login.php">Inicio</a></li>
            <li><a href="consulta.php">Consulta</a></li>
            <li><a href="diagnostico.php">Diagnóstico</a></li>
            <li><a href="tratamientos.php">Tratamientos</a></li>
            <li><a href="indicaciones.php">Indicaciones</a></li>
        </ul>          
    </nav>
    <a class="btn" href="#"><button>Buscar</button></a>
</header>
<body>
    <?php
        include('conexion.php');
    ?>
<div class="container">
    <header>Diagnóstico</header>
    <div class="form-outer">
        <form action="" method="post" class="diagnostico-form" id="diagnostico-form">
            <div class="page slide-page">
                <div class="title">Signos Vitales</div>
                <table border="0">
                    <tr> 
                        <td>Presión Arterial</td>
                        <td><input type="number" name="presion_arterial"></td>
                    </tr>
                    <tr> 
                        <td>Frecuencia Cardíaca</td>
                        <td><input type="number" name="frecuencia_cardiaca"></td>
                    </tr>
                    <tr> 
                        <td>Frecuencia Respiratoria</td>
                        <td><input type="number" name="frecuencia_respiratoria"></td>
                    </tr>
                    <tr> 
                        <td>Temperatura Corporal</td>
                        <td><input type="number" name="temperatura_corporal"></td>
                    </tr>
                    <tr> 
                        <td>Saturación de Oxígeno SpO2</td>
                        <td><input type="number" name="saturacion_oxigeno"></td>
                    </tr>
                </table>
                    <div class="field">
                        <div class="label">Cabeza y Cuello</div>
                        <select id="cabeza_cuello" name="cabeza_cuello" multiple multiselect-search="true">
                        <option value="inspeccion_cabeza">Inspección de la Cabeza</option>
                        <option value="examen_ocular">Examen Ocular</option>
                        <option value="examen_auditivo">Examen Auditivo</option>
                        <option value="examen_nasal">Examen Nasal</option>
                        <option value="examen_bucal">Examen Bucal</option>
                        </select>

                            <!--menu desplegable? no lo se rick-->
                        <?php 
                        /*include('conexion.php');
                        $sql = $mysqli->query ("SELECT * FROM cabeza_cuello");
                        
                        while ($resultado=$sql->fetch_assoc()){

                            echo "<option value='".$resultado['id']."'>".$resultado['nombres']."</option>";

                        };
                        */
                        ?>

                    </div>
                    <div class="field">
                        <div class="label">Tórax y Pulmones</div>
                        <select id="torax_pulmones" name="torax_pulmones" multiple multiselect-search="true">
                        <option disabled="disabled">Seleccione</option>
                        <option value="auscultacion_pulmonar">Auscultación Pulmonar</option>
                        <option value="movimiento_torax">Movimiento del Tórax</option>
                        <option value="sonidos_respiratorios">Sonidos Respiratorios</option>
                        </select>
                    </div>
                    <div class="field">
                        <div class="label">Corazón</div>
                        <select id="corazon" name="corazon" multiple multiselect-search="true">
                        <option disabled="disabled">Seleccione</option>
                        <option value="auscultacion_cardiaca">Auscultación Cardiaca</option>
                        <option value="ritmo_cardiaco">Ritmo Cardiaco</option>
                        <option value="soplos_cardiacos">Soplos Cardiacos</option>
                        </select>
                    </div>
                    <div class="field">
                        <div class="label">Abdomen</div>
                        <select id="abdomen" name="abdomen" multiple multiselect-search="true">
                        <option  disabled="disabled">Seleccione</option>
                        <option value="inspeccion_abdomen">Inspección del Abdomen</option>
                        <option value="palpacion_abdomen">Palpación del Abdomen</option>
                        <option value="auscultacion_abdominal">Auscultación Abdominal</option>
                        <option value="signos_irritacion_peritoneal">Signos de Irritación Peritoneal</option>
                        </select>
                    </div>
                    <div class="field">
                        <div class="label">Extremidades</div>
                        <select id="extremidades" name="extremidades" multiple multiselect-search="true">
                        <option  disabled="disabled">Seleccione</option>
                        <option value="evaluacion_fuerza_muscular">Evaluación de Fuerza Muscular</option>
                        <option value="movilidad_articular">Movilidad Articular</option>
                        <option value="edema">Edema</option>
                        <option value="pulso_periferico">Pulso Periférico</option>
                        </select>
                    </div>
                    <div class="field">
                        <div class="label">Neurológico</div>
                        <select id="neurologico" name="neurologico" multiple multiselect-search="true">
                        <option  disabled="disabled">Seleccione</option>
                        <option value="estado_mental">Estado Mental</option>
                        <option value="funcion_motora">Función Motora</option>
                        <option value="reflejos">Reflejos</option>
                        <option value="sensibilidad">Sensibilidad</option>
                        </select>
                    </div>
                    <div class="field">
                        <div class="label">Piel</div>
                        <select id="piel" name="piel" multiple multiselect-search="true">
                        <option  disabled="disabled">Seleccione</option>
                        <option value="lesiones_cutaneas">Lesiones Cutáneas</option>
                        <option value="coloracion">Coloración</option>
                        <option value="textura">Textura</option>
                        </select>
                    </div>          
                <div class="field">
                    <button type="submit">Guardar</button>
                </div>
            </div>
        </form>
    </div>
</div>
<script src="script.js"></script>
</body>
</html>