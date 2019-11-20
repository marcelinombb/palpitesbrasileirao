<?php 
/**
 * 
 */
class Connect{
	
	private static $conn;

	public function conn(){
		return self::$conn = mysqli_connect("localhost","root","","trabHairon");
	}
}
 ?>