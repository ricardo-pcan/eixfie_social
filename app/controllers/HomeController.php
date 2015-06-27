<?php 
  
  class HomeController extends ApplicationController
  {

    public function index()
    {
      require render_template . "Home/index.php";
    }


  }

  //init
  $HomeController = new HomeController($application);

?>