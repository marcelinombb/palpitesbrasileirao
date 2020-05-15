<?php

namespace app\Models;
use \PDO;
use \PDOException;

class Times
{
    private $conn;
    public function __construct()
    {
        $this->conn = Connect::conn();
    }

    public function posicoesAtuais(){

        $query = 'SELECT * FROM times ORDER BY Posicao_BR';
        $stmt = $this->conn->prepare($query);

        if ($stmt->execute()) {
             return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }else{
            return  0;
        }

    }

    public function atualizarPosicoes($pos = Array()){
        try {
            $query = "UPDATE times SET Posicao_BR = :key WHERE nome = :value";
            $stmt = $this->conn->prepare($query);

            foreach ($pos as $key => $value) {
                $stmt->bindValue(":key",$key+1,PDO::PARAM_INT);
                $stmt->bindValue(":value",$value,PDO::PARAM_STR);
                $stmt->execute();
                $stmt->closeCursor();
            }
            return true;
        }catch (PDOException $e){
            echo $e;
        }


    }
}
