<?php 
include_once "connect.class.php";

/**
 * 
 */
class Rank extends Connect
{
	public function AddRank($id_user,$palpite){
		$conn = parent::conn();
		$query = "INSERT INTO palpites(id_user,palpite) VALUES($id_user,$palpite)";
		if (mysqli_query($conn,$query)) {
			return 1;
		}
		return 0;
	}

	public function RankAtual(){
		$conn = parent::conn();
		$query = "SELECT users.nome as nome FROM palpites INNER JOIN users on users.user_id = palpites.id_user ORDER BY palpite ASC";
		if ($res = mysqli_query($conn,$query)) {
			while ($row = mysqli_fetch_assoc($res)) {
				$rank [] =$row;
			}
			return $rank;
	}
	return 0;
}

}
