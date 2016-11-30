<?php
require_once '../../controller/EventoCTRL.php';
require_once '../../model/Evento.php';

/**
 * Created by PhpStorm.
 * User: Edmarcos
 * Date: 29/11/2016
 * Time: 23:34
 */
class Fachada
{
    public function inserirEvento(Evento $evento)
    {
        $eventoCtrl = new EventoCTRL();
        $eventoCtrl->inserir($evento);
    }

    public function exibeEvento(){
        $eventoCtrl = new EventoCTRL();
        $res = $eventoCtrl->show();
        return $res;
    }
}