<?php 
/**
 * PostgresSQL
 */
class Connect{
		/*
		private static $conn;

		public function conn(){
			return self::$conn = mysqli_connect("localhost","root","","trabHairon");
		}
		*/
		public static $instance;

		public static function conn(){
			if(!isset(self::$instance)){
				
				self::$instance = new PDO("pgsql:host=ec2-54-221-214-3.compute-1.amazonaws.com dbname=dcr736pnjml4or user=uyjvxqywxgqbll password=d60d75d13a2dea2ad0dadd8df677bc20e72b00e480536c50b681176256f34052");
 
				//self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				//self::$instance->setAttribute(PDO::ATTR_ORACLE_NULLS, PDO::NULL_EMPTY_STRING);
			}

			return self::$instance;
		}
}
 ?>