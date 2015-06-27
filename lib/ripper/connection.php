<?php

  class Connection
  {

    static $_db = null;
    
    public function __construct()
    {
      
    }

    private static function connect($host, $user, $pass, $name)
    {
      self::$_db = new mysqli(
        $host,
        $user,
        $pass,
        $name
        );
      if (self::$_db->connection_errno)
      {
        echo "fallo la conexion";
        return;
      }
      self::$_db->set_charset(DB_CHARSET);
    }

    public static function getConnection($name, $user, $host, $pass)
    {
      if(self::$_db == null)
      {
        self::connect($host, $user, $pass, $name);
      }
      return self::$_db;
    }

  }

  $connection = Connection::getConnection(
      $application['database']['name'],
      $application['database']['user'],
      $application['database']['host'],
      $application['database']['password']
    );
  
?>