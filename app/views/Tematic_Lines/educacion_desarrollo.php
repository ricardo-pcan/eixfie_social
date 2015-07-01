<!DOCTYPE html>
<html lang="en">
<head>
  <?php require render_partial . "_head.php" ; ?>
  <link rel="stylesheet" type="text/css" href="/app/assets/css/views/tematic_lines/tematic-lines.css">
  <link rel="stylesheet" type="text/css" href="/app/assets/css/views/tematic_lines/educacion_desarrollo.css">

</head>
<body>
  <div class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
      <div class="navbar-header">
        <a href="splash.php"class="navbar-brand">
          <img src="../../app/assets/images/logo_solo_m.png" style="width:30px; height: 30px;" alt="Brand">
        </a>
        <a href="http://www.ipn.mx/"class="navbar-brand">
          <img src="../../app/assets/images/ipn_logo.png" style="width:30px; height: 30px;" alt="Brand">
        </a>
        <a href="http://www.cgfie.ipn.mx/Paginas/Inicio.aspx"class="navbar-brand">
          <img src="../../app/assets/images/logo_cgfie.png" style="width:40px; height: 30px;" alt="Brand">
        </a>
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle Navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div> <!-- .navbar-header-->
      <div class="navbar-collapse collapse">
        <ul class="nav nav-justified">
          <li><a href="splash.php">Inicio</a></li>
          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" href="#">Lineas Temáticas<span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="educacion_desarrollo.php">Educaci&oacute;n y Desarrollo</a></li>
              <li><a href="formacion_docente.php">Formaci&oacute;n Docente</a></li>
              <li><a href="redes.php">Redes</a></li>
            </ul>
          </li>
          <li><a href="">Transmisi&oacute;n en vivo</a></li>
          <li><a href="">Tutoriales</a></li>
          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Memorias<span class="caret"></Memoriasspan></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="#">FIE I</a></li>
              <li><a href="#">FIE II</a></li>
              <li><a href="#">FIE III</a></li>
              <li><a href="#">FIE IV</a></li>
            </ul>
          </li>
      </div>
    </div> <!-- ./container-->
  </div><!-- .navbar -->

  <section id="tematic-lines">
    <div class="section-Contain">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <h2 class="section-TitleBG">
              Lineas temáticas
            </h2>
            <div class="separator"></div>
            <p class="section-Paragraph">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
          </div>
        </div><!-- row -->
      </div><!-- container -->
    </div><!-- section-Contain-->
    <div class="section-Foro">
      <div class="container-fluid">
        <div class="row">
          <div class="col-xs-12 col-md-9">
            <h2 class="section-Title">
              Foro
            </h2>
            <div class="separator"></div>
            <div class="jumbotron">
              FORO
            </div><!-- jumbotron -->
            <button type="button" id="button-Resources" class="btn btn-info">Recursos</button>
            <div id="section-Resources">
              
            </div>
          </div>
          <div class="splash-SideContainer">
            <?php require render_partial . "_twitter_side.php" ?>
          </div>
        </div><!-- row -->
      </div><!-- container-fluid -->
    </div><!-- section-Foro -->
  </section>


  <script src="../../lib/jquery-1.11.1.min.js"></script>
  <script src="../../lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="../../lib/smooth-scroll.js"></script>
  <script src="../../lib/blur.js"></script>
  <script src="../../app/assets/js/views/index.js "></script>
</body>
</html>