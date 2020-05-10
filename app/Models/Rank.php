<?php

namespace app\Models;

/**
 * 
 */
class Rank
{
	private $conn;
	function __construct(){
		$this->conn = Connect::conn();
	}

	public function AddRank($id_user, $palpite, $cont){
		$query = "INSERT INTO public.palpites(id_user,palpite,acertos) VALUES($id_user,$palpite,$cont)";

		$stt = $this->conn->prepare($query); 
		if ($stt->execute()) {
			return 1;
		}
		return 0;
	}

	public function RankAtual($ranque){
		$eoq = ["palpite"=>'ASC',"acertos"=>'DESC'];
		$query = "SELECT public.users.nome as nome,public.palpites.$ranque as rank FROM public.palpites INNER JOIN  public.users on public.users.id_user = public.palpites.id_user ORDER BY " .$ranque." ".$eoq[$ranque];
		$stt =  $this->conn->prepare($query);
		
		$data;
		if ($stt->execute()) {
			while($result = $stt->fetch(PDO::FETCH_ASSOC)){
				$data[] = $result;
			}
			return $data;
		}else{
			return 	0;
		}

}
	public function attRank($id_user, $palpite, $cont){
		$query = "UPDATE palpites SET id_user = $id_user, palpite = $palpite, acertos = $cont";
		
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
