<?php

  require include_vendor . "facebook-php-sdk-v4-4.0-dev/src/Facebook/HttpClients/FacebookStream.php";
  require include_vendor . "facebook-php-sdk-v4-4.0-dev/src/Facebook/HttpClients/FacebookHttpable.php";
  require include_vendor . "facebook-php-sdk-v4-4.0-dev/src/Facebook/HttpClients/FacebookStreamHttpClient.php";
  require include_vendor . "facebook-php-sdk-v4-4.0-dev/src/Facebook/Entities/AccessToken.php";
  require include_vendor . "facebook-php-sdk-v4-4.0-dev/src/Facebook/FacebookSession.php";
  require include_vendor . "facebook-php-sdk-v4-4.0-dev/src/Facebook/FacebookRedirectLoginHelper.php";
  require include_vendor . "facebook-php-sdk-v4-4.0-dev/src/Facebook/FacebookRequest.php";
  require include_vendor . "facebook-php-sdk-v4-4.0-dev/src/Facebook/FacebookResponse.php";
  require include_vendor . "facebook-php-sdk-v4-4.0-dev/src/Facebook/FacebookSDKException.php";
  require include_vendor . "facebook-php-sdk-v4-4.0-dev/src/Facebook/FacebookRequestException.php";
  require include_vendor . "facebook-php-sdk-v4-4.0-dev/src/Facebook/FacebookAuthorizationException.php";
  require include_vendor . "facebook-php-sdk-v4-4.0-dev/src/Facebook/GraphObject.php";
  require include_vendor . "facebook-php-sdk-v4-4.0-dev/src/Facebook/GraphUser.php";
  require include_vendor . "facebook-php-sdk-v4-4.0-dev/src/Facebook/GraphLocation.php";

  use Facebook\FacebookSession;
  use Facebook\FacebookRedirectLoginHelper;
  use Facebook\FacebookRequest;
  use Facebook\FacebookResponse;
  use Facebook\FacebookRequestException;
  use Facebook\GraphUser;
  use Facebook\GraphObject;

  FacebookSession::setDefaultApplication($application['general']['facebook']['id'], $application['general']['facebook']['secret']);

  $helper =new FacebookRedirectLoginHelper('http://localhost:3000/login');

  try
  {
    $session = $helper->getSessionFromRedirect();
    
    if($session):
      $_SESSION['facebook'] = $session->getToken();
    endif;

  } catch(FacebookRequestException $ex) {
  // When Facebook returns an error
  } catch(\Exception $ex) {
  // When validation fails or other local issues
  }

?>