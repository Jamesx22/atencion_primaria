<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Indicaciones</title>
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
            <li><a href="tratamiento.php">Tratamientos</a></li>
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
    <header>Indicaciones</header>
    <div class="form-outer">
        <form action="" method="post" class="tratamiento-form" id="tratamiento-form">
            <div class="page slide-page">
                <div class="label">Indicaciones del Tratamiento</div>
                <div class="field">
                    <div class="label">Dosis</div>
                    <select id="dosis" name="dosis" multiple multiselect-search="true">
                    

                    </select>
                </div>
                <div class="field">
                    <div class="label">Frecuencia</div>
                    <select id="frecuencia" name="frecuencia" multiple multiselect-search="true">
                    
                    </select>
                </div>
                <div class="field">
                    <div class="label">Duración</div>
                    <select id="duracion" name="duracion" multiple multiselect-search="true">
                    
                    </select>
                </div>
                <div class="field">
                    <div class="label">Como tomar</div>
                    <input type="text" id="como_tomar" name="como_tomar">
                </div>
                <div class="field">
                    <div class="label">Otros Medicamentos</div>
                    <input type="text" id="otros_medicamentos" name="otros_medicamentos">
                </div>
                <div class="field">
                    <div class="label">Instrucciones de Procedimientos</div>
                    <select id="instrucciones_procedimientos" name="instrucciones_procedimientos" multiple multiselect-search="true">
                    <option selected="true" disabled="disabled">Seleccione</option>
                    <option value="preparacion">Preparación</option>
                    <option value="cuidados_postoperatorios">Cuidados Postoperatorios</option>
                    <option value="otras_instrucciones">Otras Instrucciones</option>
                    </select>
                </div>
                <div class="field">
                    <div class="label">Instrucciones de Terapias</div>
                    <select id="instrucciones_terapias" name="instrucciones_terapias" multiple multiselect-search="true">
                    <option selected="true" disabled="disabled">Seleccione</option>
                    <option value="ejercicios">Ejercicios</option>
                    <option value="sesiones">Sesiones de Terapia</option>
                    <option value="cuidados_domiciliarios">Cuidados Domiciliarios</option>
                    <option value="otros_terapias">Otras Terapias</option>
                    </select>
                </div>
                <div class="field">
                    <div class="label">Instrucciones de Cuidados en el Hogar</div>
                    <select id="instrucciones_cuidados_hogar" name="instrucciones_cuidados_hogar" multiple multiselect-search="true">
                    <option selected="true" disabled="disabled">Seleccione</option>
                    <option value="dieta">Dieta</option>
                    <option value="recomendaciones">Recomendaciones</option>
                    <option value="reposo">Reposo</option>
                    <option value="aplicacion_hielo_calor">Aplicación de Hielo o Calor</option>
                    </select>
                </div>
                <div class="field">
                    <div class="label">Instrucciones sobre Posibles Efectos Secundarios</div>
                    <select id="instrucciones_efectos_secundarios" name="instrucciones_efectos_secundarios" multiple multiselect-search="true">
                    <option selected="true" disabled="disabled">Seleccione</option>
                    <option value="efectos_comunes">Efectos Secundarios Comunes</option>
                    <option value="que_hacer_efectos">Qué Hacer en Caso de Efectos</option>
                    <option value="efectos_graves">Efectos Secundarios Graves</option>
                    </select>
                </div>
                <div class="field">
                    <div class="label">Instrucciones sobre Cuándo Comunicarse con el Médico</div>
                    <select id="instrucciones_comunicarse_medico" name="instrucciones_comunicarse_medico" multiple multiselect-search="true">
                    <option selected="true" disabled="disabled">Seleccione</option>
                    <option value="empeoramiento_sintomas">Empeoramiento de Síntomas</option>
                    <option value="efectos_graves">Efectos Secundarios Graves</option>
                    <option value="preguntas">Preguntas o Preocupaciones</option>
                    </select>
                </div>
                <div class="field">
                    <div class="label">Instrucciones sobre Seguimiento</div>
                    <select id="instrucciones_seguimiento" name="instrucciones_seguimiento" multiple multiselect-search="true">
                    <option selected="true" disabled="disabled">Seleccione</option>
                    <option value="fecha_seguimiento">Fecha de Seguimiento</option>
                    <option value="pruebas_control">Pruebas de Control</option>
                    <option value="nueva_cita">Programar Nueva Cita</option>
                    </select>
                </div>
                <div class="field">
                    <div class="label">Instrucciones sobre Estilo de Vida</div>
                    <select id="instrucciones_estilo_vida" name="instrucciones_estilo_vida" multiple multiselect-search="true">
                    <option selected="true" disabled="disabled">Seleccione</option>
                    <option value="cambios_dieta">Cambios en la Dieta</option>
                    <option value="ejercicio">Ejercicio</option>
                    <option value="reduccion_estres">Reducción de Estrés</option>
                    </select>
                </div>
                <div class="field">
                    <div class="label">Instrucciones Especiales</div>
                    <input type="text" id="instrucciones_especiales" name="instrucciones_especiales">
                </div>
                <div class="field">
                    <div class="label">Observaciones adicionales</div>
                    <textarea id="informacion_contacto" name="informacion_contacto" rows="5" cols="50"></textarea>
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