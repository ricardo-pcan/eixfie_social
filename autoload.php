<?php


  //ripper
    require include_lib . "ripper/utils.php";
    require global_path . "app/config/application.php";
    require include_lib . "ripper/connection.php";

  //facebook api
    require global_path . 'vendor/facebook-php-sdk-v4-4.0-dev/autoload.php';
    require global_path . 'lib/facebook/init.php';

  //controllers
    require include_controller . "ApplicationController.php";
    require include_controller . "HomeController.php";

?>