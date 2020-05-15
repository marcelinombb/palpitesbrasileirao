<?php

namespace app\Controllers;

use app\Models\Rank;
use app\Models\Times;


class RankController
{
    //retorna uma lista com as posições do rank organizados pelos acertos e proximidade
    public function rankAtual($tipo)
    {
        $tipo = filter_var($tipo,FILTER_SANITIZE_STRING);
        $rank = new Rank();
        $result = $rank->rankAtual($tipo);
        if ($result)
        {
            echo json_encode($result);
        }
    }

    public function palpite()
    {
        $palpite = json_decode(file_get_contents("php://input"), true);

        if ($palpite)
        {
            $rank = new Rank();

            $pontuacoes = $this->calculoDaPotuacao($palpite);
            if ($rank->addRank($_SESSION['user']['id'], $pontuacoes['proximidade'],$pontuacoes['acertos']))
            {
                echo json_encode(['response' => true]);
            }
            //echo json_encode($pontuacoes);
        } else {
            echo json_encode(['response' => false]);
        }
    }

    public function calculoDaPotuacao($posicoes){
        $times = new Times();

        $real = [];

        foreach ($times->posicoesAtuais() as $key => $value) {
            array_push($real,$value['nome']);
        }

        //calculo ae
        $soma = 0;
        $cont = 0;

        foreach ($posicoes as $key => $value) {
            //diferença entre as posições real e palpitte
            $dif = $key - array_search($value, $real);
            // Se a diferença der 0 o usuario acertou a posição do palpite
            if(!$dif){
                $cont++;
            }
            $soma += pow($dif, 2);
        }

        return array("proximidade" => sqrt($soma),"acertos"=> $cont);

    }


}

?>
