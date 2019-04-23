<!DOCTYPE html>
<html lang="en">

<head>
  <?php include '../layout/head.php'; ?>
  <title>Calendario Académico</title>
</head>

<body>
  <div id="layout">
    <?php include '../layout/menu.php'; ?>
    <div id="main">
      <?php include '../layout/header.php'; ?>
      <div class="content">
        <div class="post not-line">
          <p class="title-post">Calendario Académico I - 2019</p>
          <embed src="../../public/files/cronograma.pdf" type="application/pdf" width="100%" height="500px">
        </div>
      </div>
    </div>
    <?php include '../layout/footer.php'; ?>
  </div>
  <?php include '../layout/script.php'; ?>
</body>

</html>