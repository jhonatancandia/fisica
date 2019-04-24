<!DOCTYPE html>
<html lang="en">

<head>
  <?php include '../layout/head.php'; ?>
  <title>Estructura Orgánica</title>
</head>

<body>
  <div id="layout">
    <?php include '../layout/menu.php'; ?>
    <div id="main">
      <?php include '../layout/header.php'; ?>
      <div class="content">
        <div class="post">
          <p class="title-post">
            Dirección de Carrera y Jefatura de Departamento
          </p>
          <div class="pure-g">
            <div class="pure-u-1-2">
              <p class="text-center">
                <img width="300px" height="300px" class="pure-img-responsive" src="../public/img/user.png" alt="Director de Carrera">
              </p>
              <p class="text-center">Lic. Fredy Flores Flores</p>
              <p class="text-center"><strong>Director de Carrera de Física</strong></p>
            </div>
            <div class="pure-u-1-2">
              <p class="text-center">
                <img width="300px" height="300px" class="pure-img-responsive" src="../public/img/user.png" alt="Jefe de Departamento">
              </p>
              <p class="text-center">Lic. René Moreira Calizaya</p>
              <p class="text-center"><strong>Jefe de Departamento de Física</strong></p>
            </div>
          </div>
        </div>
        <div class="post">
          <p class="title-post">
            Administrador de los Laboratorios de Física
          </p>
          <div class="pure-g">
            <div class="pure-u-1-3"></div>
            <div class="pure-u-1-3">
              <img width="350px" height="350px" class="pure-img-responsive" src="../public/img/user.png" alt="Administrador del laboratorio">
              <p class="text-center">Ing. Oscar Cuellar Olivera</p>
              <p class="text-center"><strong>Administrador del Laboratorio de Física</strong></p>
            </div>
            <div class="pure-u-1-3"></div>
          </div>
        </div>
      </div>
    </div>
    <?php include '../layout/footer.php'; ?>
  </div>
  <?php include '../layout/script.php'; ?>
</body>

</html>