<?php 
include_once "connect.class.php";

class Verificador extends Connect{
    public function verificaPalpite($id){
		$conn = parent::conn();
		$query = "SELECT id_user FROM palpites WHERE id_user = ".$id;
		$stt = $conn->prepare($query);
		$stt->execute();
		$row = $stt->fetch(PDO::FETCH_ASSOC);
		return $row ? "in" : "out";
	}
}