<?php 
  use Facebook\FacebookRequest;
  use Facebook\FacebookSession;
  use Facebook\GraphUser;
  use Facebook\GraphObject;
  use Facebook\GraphLocation;

  class TematicLinesController extends ApplicationController
  {

    public function education($data=null)
    {
      if (isset($_SESSION['facebook']) ):
        require render_template . "Tematic_Lines/educacion_desarrollo.php";
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
        require render_template . "Splash/index.php";
      endif;
    }


  }

  //init
  $TematicLinesController = new TematicLinesController($application);

?>