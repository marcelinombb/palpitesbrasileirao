<?php 
include_once "connect.class.php";

/**
 * 
 */
class Rank extends Connect
{
	public function AddRank($id_user, $palpite, $cont){
		$conn = parent::conn();
		$query = "INSERT INTO palpites(id_user,palpite,acertos) VALUES($id_user,$palpite,$cont)";
		if (mysqli_query($conn,$query)) {
			return 1;
		}
		return 0;
	}

	public function RankAtual($ranque){
		$conn = parent::conn();
		$eoq = ["palpite"=>'ASC',"acertos"=>'DESC'];
		$query = "SELECT users.nome as nome,palpites.$ranque as rank FROM palpites INNER JOIN users on users.user_id = palpites.id_user ORDER BY " .$ranque." ".$eoq[$ranque];
		if ($res = mysqli_query($conn,$query)) {
			while ($row = mysqli_fetch_assoc($res)) {
				$rank [] =$row;
			}
			return isset($rank)? $rank: 0;
	}
	return 0;
}

}
