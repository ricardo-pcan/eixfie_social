<!DOCTYPE html>
<html lang="en">
<head>
  <?php require render_partial . "_head.php" ?>
  <link rel="stylesheet" type="text/css" href="app/assets/css/views/splash/splash.css">
</head>
<body>
  <section id="splash">
    <?php require render_template . "Splash/partials/_navbar.php" ?>
    <div class="container-fluid">
      <div class="splash-Presentation">
        <div class="row">
          <div class="col-xs-12 col-md-9 splash-Container">
             <div class="row"> <!-- greet -->
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-5">
                  <div class="profile-greet">
                    <div class="row">
                      <div class="col-xs-2">
                        <div class="profile-greet-img">
                          <img src="<?= "https://graph.facebook.com/" . $graphObject['id'] . "/picture" ?>" alt="">
                        </div>     
                      </div>
                      <div class="col-xs-10">
                        <div class="profile-greet-content">
                          Hola <?= $graphObject['first_name'] ?> bienvenido al portal electronico del IX Foro de Inovaci&oacute;n Educativa
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div> <!-- greet -->
            <h2 class="section-TitleBG text-center">
              Presentaci&oacute;n
            </h2>
            <div class="separator"></div>
            <div class="row splash-PresentationParagraphsContainer">
              <div class="col-sm-12 splash-PresentationParagraph">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </div>
              <div class="col-sm-12 splash-PresentationParagraph">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </div>
            </div>
          </div><!--  -->
          <div class="splash-SideContainer">
            <?php require render_partial . "_twitter_side.php" ?>
          </div>
        </div><!-- .row-->
      </div><!-- .splash-Presentation-->
    </div><!-- .container-fluid-->
  </section><!-- #splash -->
  <div class="clear"></div>
  <?php require render_template . "partials/_tail.php" ?>
  <script src="../../app/assets/js/views/splash.js"></script>
</body>
</html>