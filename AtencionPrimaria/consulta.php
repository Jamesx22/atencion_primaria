<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Consulta</title>
  <link rel="stylesheet" href="style1.css">

  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
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
  <div class="container" style="width: 90%;">
    <header>Consulta</header>
    <div class="progress-bar">
      <div class="step">
        <p>Datos del paciente</p>
        <div class="bullet">
          <span>1</span>
        </div>
        <div class="check fas fa-check"></div>
      </div>
      <div class="step">
        <p>Antecedentes Personales</p>
        <div class="bullet">
          <span>2</span>
        </div>
        <div class="check fas fa-check"></div>
      </div>
      <div class="step">
        <p>Antecedentes Familiares</p>
        <div class="bullet">
          <span>3</span>
        </div>
        <div class="check fas fa-check"></div>
      </div>
    </div>
    <!-- form-->
    
    <div class="form-outer">
      <!--Datos personales-->
      <div>
        <div class="title">Datos Personales</div>
        <form action="index.php" method="post">
          <table width='50%' border=0 style="display: flex">
            <tr bgcolor='#DDDDDD'>
              <td><strong>ID</strong></td>
              <td><strong>Nombres</strong></td>
              <td><strong>Apellidos</strong></td>
              <td><strong>Número de Cedula</strong></td>
              <td><strong>Género</strong></td>
              <td><strong>Edad</strong></td>
              <td><strong>Número de Celular</strong></td>
              <td><strong>Número de contacto de Emergencia</strong></td>
              <td><strong>Correo Electrónico</strong></td>
              <td><strong>Action</strong></td>
            </tr>

            <?php
            $sql = $conn->query(
            "SELECT id_paciente, nombres, apellidos, numero_cedula, nombre_genero, edad, numero_celular, numero_emergencia, direccion, correo 
            FROM pacientes
            INNER JOIN generos ON pacientes.id_genero = generos.id_genero"
            );

            while ($resultado = $sql->fetch_assoc()) {

            ?>
              <tr>
                <th scope='row'><?php echo $resultado['id_paciente'] ?></th>
                <th scope='row'><?php echo $resultado['nombres'] ?></th>
                <th scope='row'><?php echo $resultado['apellidos'] ?></th>
                <th scope='row'><?php echo $resultado['numero_cedula'] ?></th>
                <th scope='row'><?php echo $resultado['nombre_genero'] ?></th>
                <th scope='row'><?php echo $resultado['edad'] ?></th>
                <th scope='row'><?php echo $resultado['numero_celular'] ?></th>
                <th scope='row'><?php echo $resultado['numero_emergencia'] ?></th>
                <th scope='row'><?php echo $resultado['direccion'] ?></th>
                <th scope='row'><?php echo $resultado['correo'] ?></th>

                <th>
                  <a href="edit.php" class="">Editar</a>
                  <a href="delete.php" class="">Eliminar</a>
                </th>
              </tr>
            <?php
            };
            ?>
          </table>
        </form>
        
        <div class="field">
          <button class="firstNext next">Siguiente</button>
        </div>
      </div>
      <!--Antecedentes Personales-->
      <div>
        <form action="index.php" method="post">
          <table width='50%' border=0 style="display: flex">
            <tr bgcolor='#DDDDDD'>
              <td><strong>ID</strong></td>
              <td><strong>Historial de Enfermedades</strong></td>
              <td><strong>Alergias</strong></td>
              <td><strong>Trastornos Mentales</strong></td>
              <td><strong>Enfermedades Infecciosas</strong></td>
              <td><strong>Consumo de estupefacientes o sustancias ilícitas</strong></td>
              <td><strong>Cirugías previas</strong></td>
              <td><strong>Hospitalizaciones previas</strong></td>
              <td><strong>Accidentes Cerebrovasculares previos</strong></td>
              <td><strong>Action</strong></td>
            </tr>

            <?php

            /*arreglar joins*/
            /*$sql1 = $conn->query(
            "SELECT id_paciente, nombres, historial_enfermedades, alergias, trastorno_mental, consumo_estupefacientes, cirugia_previa, hospitalizacion_previa, acv_previo 
            FROM antecedentes_personales
            INNER JOIN pacientes ON antecedentes_personales.id_paciente = pacientes.id_paciente"
            );*/
            $sql1=$conn->query("SELECT * FROM antecedentes_personales");
              echo $sql1;
              
            /*while ($resultado = $sql1->fetch_assoc()) {
            ?>
              <tr>
                <th scope='row'><?php echo $resultado['nombres'] ?></th>
                <th scope='row'><?php echo $resultado['historial_enfermedades'] ?></th>
                <th scope='row'><?php echo $resultado['alergias'] ?></th>
                <th scope='row'><?php echo $resultado['trastorno_mental'] ?></th>
                <th scope='row'><?php echo $resultado['enfermedad_infecciosa'] ?></th>
                <th scope='row'><?php echo $resultado['consumo_estupefacientes'] ?></th>
                <th scope='row'><?php echo $resultado['cirugia_previa'] ?></th>
                <th scope='row'><?php echo $resultado['hospitalizacion_previa'] ?></th>
                <th scope='row'><?php echo $resultado['acv_previo'] ?></th>

                <th>
                  <a href="edit.php"">Editar</a>
                </th>
              </tr>
            <?php
            };*/
            ?>
          </table>
        </form>
        <div class="field btns">
          <button class="prev-1 prev">Atrás</button>
          <button class="next-1 next">Siguiente</button>
        </div>
      </div>
      <!--Antecedentes Familiares-->
      <div>
        <form action="index.php" method="post">
          <table width='50%' border=0 style="display: flex">
            <tr bgcolor='#DDDDDD'>
              <td><strong>ID</strong></td>
              <td><strong>Enfermedades Hereditarias</strong></td>
              <td><strong>Cáncer en la familia</strong></td>
              <td><strong>Trastornos genéticos</strong></td>
              <td><strong>ACV Previos en la Familia</strong></td>
              <td><strong>Otro</strong></td>
              <td><strong>Action</strong></td>
            </tr>

            <?php

            /*arreglar joins*/
            $sql2 = $conn->query(
              "SELECT id_paciente, enfermedades_hereditarias, cancer_familia, trastorno_genetico, otra_enfermedad, acv_previo FROM antecedentes_familiares
              INNER JOIN pacientes ON antecedentes_familiares.id_paciente = pacientes.id_paciente"
            );


            while ($resultado = $sql2->fetch_assoc()) {

            ?>
              <tr>
                <th scope='row'><?php echo $resultado['id_paciente'] ?></th>
                <th scope='row'><?php echo $resultado['enfermedades_hereditarias'] ?></th>
                <th scope='row'><?php echo $resultado['cancer_familia'] ?></th>
                <th scope='row'><?php echo $resultado['trastorno_genetico'] ?></th>
                <th scope='row'><?php echo $resultado['acv_previo'] ?></th>
                <th scope='row'><?php echo $resultado['otra_enfermedad'] ?></th>
                

                <th>
                  <a href="edit.php" class="">Editar</a>
                </th>
              </tr>
            <?php
            };
            ?>
          </table>
        </form>
        <div class="field btns">
          <button class="prev-1 prev">Atrás</button>
        </div>
      </div>
    </div>
  </div>
<script src="script.js"></script>
</body>

</html>