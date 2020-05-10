<?php 

namespace app\Models;
use \PDO;
/**
 *
 */
class Connect{
		public static $instance;

		private function __construct(){}

		public static function conn(){
			if(!isset(self::$instance)){
				
				self::$instance = new PDO("mysql:host=localhost;dbname=trabHairon",'root' ,'');
				self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				self::$instance->setAttribute(PDO::ATTR_ORACLE_NULLS, PDO::NULL_EMPTY_STRING);
			}

			return self::$instance;
		}
}
 ?>