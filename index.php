<?php

  //globals
    define("global_path", __DIR__ . "/");
    define("render_template", global_path . "app/views/");
    define("render_partial", global_path . "app/views/partials/");
    define("stylesheet_tag", global_path . "app/assets/css/");
    define("javascript_include", global_path . "app/assets/js/");
    define("include_vendor", global_path . "vendor/");
    define("include_lib", global_path . "lib/");
    define("include_model", global_path . "app/models/");
    define("include_controller", global_path . "app/controllers/");

  //add dependencies
    define("FACEBOOK_SDK_V4_SRC_DIR", "./vendor/facebook-php-sdk-v4.4.0-dev/src/Facebook/");
    
  //
    session_start();
  //add autoload.php
    require global_path . "autoload.php";


  // router
    $uri = $_SERVER['REQUEST_URI'];

    if($uri == "/" || $uri == "/index.php"):
      $data = array(
        'helper' => $helper,
        'scopes' => $application['general']['facebook']['scopes']
        );
      $HomeController->index($data);
    elseif(ereg("/login", $uri)):
      $HomeController->login();
    elseif(ereg("/LineasTematicas/EducacionDesarrollo", $uri)):
      $TematicLinesController->education();
    endif;




    /**switch($uri)
    {
      case "/":
        $data = array(
          'helper' => $helper,
          'scopes' => $application['general']['facebook']['scopes']
          );
        $HomeController->index($data);
        break;
      case "/index.php":
        $data = array(
          'helper' => $helper,
          'scopes' => $application['general']['facebook']['scopes']
          );
        $HomeController->index();
        break;
      case "/login\*":
        
      default:
        echo "no nada de que";
        break;
    }*/

?>