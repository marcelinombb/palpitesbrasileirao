<?php

namespace app\Models;
use \PDO;
/**
 * 
 */
class Rank
{
	private $conn;
	function __construct(){
		$this->conn = Connect::conn();
	}

	public function addRank($id_user, $palpite, $cont){
		$query = "INSERT INTO palpites(id_user,palpite,acertos) VALUES(:id_user,:palpite,:cont)";
		$stt = $this->conn->prepare($query);
		$stt->bindValue(":id_user",$id_user,PDO::PARAM_INT);
		$stt->bindValue(":palpite",$palpite,PDO::PARAM_STR);
		$stt->bindValue(":cont",$cont,PDO::PARAM_INT);
		if ($stt->execute()) {
			return 1;
		}
		return 0;
	}

	public function rankAtual($ranque){
		$eoq = ["palpite"=>'ASC',"acertos"=>'DESC'];
		$query = "SELECT nome as nome,palpites.$ranque as rank FROM palpites INNER JOIN users on users.user_id = palpites.id_user ORDER BY " .$ranque." ".$eoq[$ranque];
		$stt =  $this->conn->prepare($query);

		if ($stt->execute()) {
		    return $stt->fetchAll(PDO::FETCH_ASSOC);
		}else{
			return 	0;
		}

}
	public function attRank($id_user, $palpite, $cont){
		$query = "UPDATE palpites SET user_id = $id_user, palpite = $palpite, acertos = $cont";
		
		$stt = $this->conn->prepare($query); 
		if ($stt->execute()) {
			return 1;
		}
		return 0;
	}

	public function delete($id){
		$query = "DELETE FROM public.palpites WHERE id_user = $id";
		
		$stt = $this->conn->prepare($query); 
		if ($stt->execute()) {
			return 1;
		}
		return 0;
	}

}
