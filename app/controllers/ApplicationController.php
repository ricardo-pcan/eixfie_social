<?php 
  class ApplicationController
  {
    protected $application;
    
    public function __construct($application)
    {
      $this->application = $application;
    }
  }
?>