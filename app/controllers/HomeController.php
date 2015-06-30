<?php

  use Facebook\FacebookRequest;
  use Facebook\FacebookSession;
  use Facebook\GraphUser;
  use Facebook\GraphObject;
  use Facebook\GraphLocation;

  class HomeController extends ApplicationController
  {

    public function index($data=null)
    {
      if ( isset($_SESSION['facebook']) ):
        header('Location: /login');
      else:
        require render_template . "Home/index.php";
      endif;
    }

    public function login($data=null)
    {
      if(isset($_SESSION['facebook'])):
        $session = new FacebookSession($_SESSION['facebook']);
        $request = new FacebookRequest($session, 'GET', '/me');
        $response = $request->execute();
        $graphObject = $response->getGraphObject()->asArray();
      endif;
    }


  }

  //init
  $HomeController = new HomeController($application);

?>