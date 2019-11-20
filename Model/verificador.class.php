<?php 
include_once "connect.class.php";

class Verificador extends Connect{
    public function verificaPalpite($id){
		$conn = parent::conn();
		$query = "SELECT id_user FROM palpites WHERE id_user = ".$id;
		$res = mysqli_query($conn, $query);
		$row = mysqli_fetch_assoc($res);
		
		return $row ? "in" : "out";
	
	}
}