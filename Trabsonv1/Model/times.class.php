<?php
include_once "connect.class.php";
class Times extends Connect
{
    public function times(){
        $conn = parent::conn();
        $cuery = "SELECT * FROM times ORDER BY posicao_BR";
        if ($res = mysqli_query($conn, $cuery)) {
            while ($row = mysqli_fetch_assoc($res)) {
               $times [] = $row;
            }
            return $times;
        }
        return 0;
    }

    public function atualizarPosicoes($pos){
        print_r($pos);
        $conn = parent::conn();
        $cont = 0;
        foreach ($pos as $key => $value) {
        $query = "UPDATE times SET Posicao_BR = $key WHERE nome = '$value' ";
            if($res =  mysqli_query($conn,$query)){
                $cont++;
            }
        }
        return $cont >= 19 ? "ok": "deu ruim";
    }
}
