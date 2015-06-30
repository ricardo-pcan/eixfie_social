<!DOCTYPE html>
<html lang="es">
<head>
  <?php require render_partial . "_head.php" ?>
</head>
<body>
  <?php require render_template . "Home/partials/_navbar.php"; ?>
  <section id="login">
    <div class="container-fluid">
      <div class="login-Container">
        <div class="row">
          <div class="col-xs-4 col-lg-4 col-md-4 login-ImageContainer hidden-xs">
            <div class="col-xs-12 login-InImage">
              <img src="app/assets/images/logo_solo_m.png" class="img-responsive img-Center" alt="">
            </div>
          </div>
          <div class="col-sm-8 col-lg-8 col-md-8 col-xs-12 login-FormContainer text-center">
            <div class="main-Logos">
              <div class="row">
                <div class="col-xs-4">
                  <a href="http://www.sep.gob.mx/"><img src="app/assets/images/HeaderSEP.png" class="img-responsive img-Center" alt=""> </a>
                </div>
                <div class="col-xs-4">
                  <a href="http://www.ipn.mx/Paginas/inicio.aspx"><img src="app/assets/images/HeaderIPN.png" class="img-responsive img-Center" alt=""> </a>
                </div>
                <div class="col-xs-4">
                  <a href="http://www.cgfie.ipn.mx/Paginas/Inicio.aspx"><img src="app/assets/images/logos_cgfie.png" class="img-responsive img-Center" alt=""></a> 
                </div> 
              </div>
            </div>
            <h2 class="section-Title">Portal Electr&oacute;nico del IV Foro de Investigaci&oacute;n Educativa</h2>
            <div class="row">
              <div class="col-md-12">
                <?php if(isset($_SESSION['facebook'])) ?>
                <a href="<?php echo $data['helper']->getLoginUrl($data['scopes'])?>" class="btn btn-primary">Iniciar Session con facebook</a>
              </div>
            </div>
          </div>
        </div>
      </div>    
    </div>
  </section>


  <?php require render_partial . "_tail.php" ?>
</body>
</html>