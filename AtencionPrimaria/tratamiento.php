<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Tratamiento</title>
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
        <form action="" method="post" class="tratamiento-form" id="tratamiento-form">
            <div class="page slide-page">
            
                <table border="0">
                <div class="field">
                <div class="label">Plan de Tratamiento</div>
                <select id="plan_tratamiento" name="plan_tratamiento" multiple multiselect-search="true">
                    <option selected="true" disabled="disabled">Seleccione</option>
                    <option value="fisioterapia">Fisioterapia</option>
                    <option value="medicamentos_orales">Medicamentos Orales</option>
                    <option value="cirugía">Cirugía</option>
                    <option value="terapia_ocupacional">Terapia Ocupacional</option>
                    <option value="cuidados_paliativos">Cuidados Paliativos</option>
                </select>
                </div>
            <div class="field">
                <div class="label">Medicamentos</div>
                <select id="medicamentos" name="medicamentos" multiple multiselect-search="true">
                    <option selected="true" disabled="disabled">Seleccione</option>
                    <option value="ibuprofeno">Ibuprofeno</option>
                    <option value="paracetamol">Paracetamol</option>
                    <option value="amlodipina">Amlodipina</option>
                    <option value="insulina">Insulina</option>
                    <option value="omeprazol">Omeprazol</option>
                </select>
            </div>
            <div class="field">
                <div class="label">Procedimientos</div>
                <select id="procedimientos" name="procedimientos" multiple multiselect-search="true">
                    <option selected="true" disabled="disabled">Seleccione</option>
                    <option value="biopsia">Biopsia</option>
                    <option value="endoscopia">Endoscopia</option>
                    <option value="radioterapia">Radioterapia</option>
                    <option value="laparoscopia">Laparoscopia</option>
                    <option value="cateterismo">Cateterismo</option>
                </select>
            </div>
            <div class="field">
                <div class="label">Terapias</div>
                <select id="terapias" name="terapias" multiple multiselect-search="true">
                    <option selected="true" disabled="disabled">Seleccione</option>
                    <option value="terapia_fisica">Terapia Física</option>
                    <option value="terapia_respiratoria">Terapia Respiratoria</option>
                    <option value="terapia_de_habla">Terapia de Habla</option>
                    <option value="terapia_occupacional">Terapia Ocupacional</option>
                    <option value="terapia_de_rehabilitacion">Terapia de Rehabilitación</option>
                </select>
            </div>
            <div class="field">
                <div class="label">Cirugías</div>
                <select id="cirugia" name="cirugia" multiple multiselect-search="true">
                    <option selected="true" disabled="disabled">Seleccione</option>
                    <option value="apendicectomia">Apendicectomía</option>
                    <option value="colecistectomia">Colecistectomía</option>
                    <option value="herniorrafia">Herniorrafia</option>
                    <option value="artroplastia">Artroplastia</option>
                    <option value="mastectomia">Mastectomía</option>
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