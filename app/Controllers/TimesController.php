<?php

namespace app\Controllers;
use app\Models\Times;

class TimesController{

    public function times()
    {
        $times = new Times();
        echo json_encode($times->posicoesAtuais());
    }

    public function atualizarPosicoes()
    {
        $posicoes = json_decode(file_get_contents("php://input"),true);
        $result['result'] = false;
        if (!empty($posicoes))
        {
            $times = new Times();
            if ($times->atualizarPosicoes($posicoes))
            {
                $result['result'] = true;
            }
        }
        echo json_encode($result);

        //echo $_SERVER['REQUEST_METHOD'];
    }



}