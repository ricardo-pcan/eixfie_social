<?php


  //ripper
    require include_lib . "ripper/utils.php";
    require global_path . "app/config/application.php";
    require include_lib . "ripper/connection.php";

  //vendor
    require include_vendor . "AltoRouter/AltoRouter.php";    

  //controllers
    require include_controller . "ApplicationController.php";
    require include_controller . "HomeController.php";
    require include_controller . "TematicLinesController.php";

?>