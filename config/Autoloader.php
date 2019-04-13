<?php
class Autoloader
{
  static function register()
  {
    spl_autoload_register(array(__CLASS__, "autoload"));
  }
  static function autoload($class)
  {

    //echo str_replace("\\", "/", $class."Controller.php");
    if(file_exists(str_replace("\\", "/", $class."Controller.php")))
    {
      require_once str_replace("\\", "/", $class."Controller.php");
    }
    else if(file_exists(str_replace("\\", "/", $class.".php")))
    {
      require_once str_replace("\\", "/", $class.".php");
    }
    else {
      die("verifiez vos namespaces");
    }
  } 
}
Autoloader::register();
?>