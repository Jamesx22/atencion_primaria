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
    <header>Diagnóstico</header>
    <div class="form-outer">
        <form action="" method="post" class="diagnostico-form" id="diagnostico-form">
            <div class="page slide-page">
                <div class="title"></div>
                    <div class="field">
                        <div class="label">Presión Arterial</div>
                        <td><input type="number" name="presion_arterial">
                    </div>
                    <div class="field"> 
                        <div class="label">Frecuencia Cardíaca</div>
                        <input type="number" name="frecuencia_cardiaca">
                    </div>
                    <div class="field"> 
                        <div class="label">Frecuencia Respiratoria</div>
                        <input type="number" name="frecuencia_respiratoria">
                    </div>
                    <div class="field">
                        <div class="label">Temperatura Corporal</div>
                        <input type="number" name="temperatura_corporal">
                    </div>
                    <div class="field">
                    <div class="label">Saturación de Oxígeno SpO2</div>
                        <td><input type="number" name="saturacion_oxigeno">
                    </div>
                
                    <div class="field">
                        <div class="label">Cabeza y Cuello</div>
                        <select id="cabeza_cuello" name="cabeza_cuello" multiple multiselect-search="true">

                        </select>

                    </div>
                    <div class="field">
                        <div class="label">Tórax y Pulmones</div>
                        <select id="torax_pulmones" name="torax_pulmones" multiple multiselect-search="true">

                        </select>
                    </div>
                    <div class="field">
                        <div class="label">Corazón</div>
                        <select id="corazon" name="corazon" multiple multiselect-search="true">

                        </select>
                    </div>
                    <div class="field">
                        <div class="label">Abdomen</div>
                        <select id="abdomen" name="abdomen" multiple multiselect-search="true">

                        </select>
                    </div>
                    <div class="field">
                        <div class="label">Extremidades</div>
                        <select id="extremidades" name="extremidades" multiple multiselect-search="true">

                        </select>
                    </div>
                    <div class="field">
                        <div class="label">Neurológico</div>
                        <select id="neurologico" name="neurologico" multiple multiselect-search="true">
 
                        </select>
                    </div>
                    <div class="field">
                        <div class="label">Piel</div>
                        <select id="piel" name="piel" multiple multiselect-search="true">

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