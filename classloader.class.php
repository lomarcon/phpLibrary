<?
class classloader {


   private static $instance;
   private $libPath = NULL;
   private $callback = NULL;

   private function __construct () {
   }

   public function __clone() {
      trigger_error('Clone is not allowed.', E_USER_ERROR);
   }

   public static function getInstance() {
      $c = __CLASS__;
      if (!(self::$instance instanceof $c)) {
         self::$instance = new $c();
      }
      return self::$instance;
   }
}
