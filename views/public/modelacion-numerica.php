<!DOCTYPE html>
<html lang="en">

<head>
  <?php include '../layout/head.php'; ?>
  <title>Modelación Numérica de Variables Climaticas</title>
</head>

<body>
  <div id="layout">
    <?php include '../layout/menu.php'; ?>
    <div id="main">
      <?php include '../layout/header.php'; ?>
      <div class="content">
        <div class="post not-line">
          <p class="title-post">
            Modelación Numérica de Variables Climáticas
          </p>
          <p>El Departamento de Física de la UMSS por medio del Proyecto de Modelación de Variables Climáticas (PMVC) ha
            incursionado en el campo de la Modelación Numérica desde 2009 haciendo uso del modelo MM5, el cual trabaja
            en Diferencias Finitas, adquiere datos de entrada de circulación global de la web, realiza el pre-proceso
            con sus módulos Terrain, Pre-Grid y Re-Grid, el proceso con el módulo MM5 y el post-proceso con GRAds. Como
            resultado se obtienen proyecciones con horizonte de pronóstico de 2 días y resolución espacial de 25 x 25 km
            para casi un centenar de variables climáticas entre las que destacan la temperatura, precipitación pluvial,
            humedad relativa, presión atmosférica, radiación solar y velocidad de viento. El modelo ha sido configurado
            para abarcar la totalidad del territorio boliviano.
          </p>  
          <p>
          La información generada por el modelo y los modelos estadísticos, proveerán de abundante información
            climática que podrá ser utilizada en diferentes campos de la investigación (biología, química, ingenierías,
            medio ambiente, cambio climático, agronomía, etc.). Toda la información generada por el PMVC será de acceso
            libre a la comunidad en general por medio del enlace <a href="http://modelacion.fcyt.umss.edu.bo"
              target="_blank">http://modelacion.fcyt.umss.edu.bo</a>. Asimismo, en el
            portal mencionado se ofrecerá información climática en tiempo real a partir de los datos medidos en la
            Estación Meteorológica Física (EMF-UMSS).
          </p>   
          <p>
            Para mayor Información:<a href="http://modelacion.fcyt.umss.edu.bo"
              target="_blank">http://modelacion.fcyt.umss.edu.bo</a>.
          </p>
        </div>
      </div>
    </div>
    <?php include '../layout/footer.php'; ?>
  </div>
  <?php include '../layout/script.php'; ?>
</body>

</html>