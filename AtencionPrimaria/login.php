

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login</title>
  <link rel="stylesheet" href="style.css">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<header class="header">
  <div class="logo" style="display: none;">
    <img src="logo.jpg" alt="Logo de la marca">
  </div>
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
<div class="container">
    <header>Ingresar al sistema</header>
    <div class="form-outer">
        <form action="" method="POST">
            <div class="page slide-page">
            <div class="field">
                <div class="label" name="cedula">Introduzca el Número de Cédula del Paciente</div>
                <input type="number" name="login_cedula">
            </div>
            <div class="field">
                <input type="submit" class="submit" name="btn-login" value="Ingresar">
            </div>

            <?php 
                include('conexion.php');
                include('validar.php');
            ?>
        </form>
    </div>
</div>    
</body>
</html>