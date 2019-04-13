<!DOCTYPE html>
<html lang="en">

<head>
  <?php include '../layout/head.php'; ?>
  <title>Malla Curricular</title>
</head>

<body>
  <div id="layout">
    <?php include '../layout/menu.php'; ?>
    <div id="main">
      <div class="header">
        <div class="pure-g">
          <div class="pure-u-1-3" id="logo-umss">
            <img width="200px" height="200px" class="pure-img-responsive" src="../../public/img/logo-umss.png"
              alt="Logo umss" />
          </div>
          <div class="pure-u-1-3"></div>
          <div class="pure-u-1-3" id="title">
            <h2>Carrera de Física</h2>
          </div>
        </div>
      </div>
      <div class="content">
        <div class="post not-line">
          <p class="title-post">Malla Curricular</p>
          <embed src="../../public/files/malla_curricular.pdf" type="application/pdf" width="100%" height="500px">
        </div>
      </div>
    </div>
    <?php include '../layout/footer.php'; ?>
  </div>
  <?php include '../layout/script.php'; ?>
</body>

</html>