<?php
include_once "connect.class.php";
class Times extends Connect
{
    public function times(){
        $conn = parent::conn();
        $query = 'SELECT * FROM public.times ORDER BY "posicao_BR"';

        $stt = $conn->prepare($query);
        $data;
        if ($stt->execute()) {
            while($result = $stt->fetch(PDO::FETCH_ASSOC)){
                $data[] = $result;
            }
            return $data;
        }else{
            return  0;
        }

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
