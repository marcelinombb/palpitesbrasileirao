<?php

namespace app\Models;
use \PDO;

class Times
{
    private $conn;
    public function __construct()
    {
        $this->conn = Connect::conn();
    }

    public function posicoesAtuais(){

        $query = 'SELECT * FROM public.times ORDER BY "posicao_BR"';
        $stmt = $this->conn->prepare($query);

        if ($stmt->execute()) {
            echo json_encode($stmt->fetch(PDO::FETCH_ASSOC));
        }else{
            return  0;
        }

    }

    public function atualizarPosicoes($pos = Array()){

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
