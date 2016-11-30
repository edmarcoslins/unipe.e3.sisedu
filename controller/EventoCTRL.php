<?php

require_once '../../model/Evento.php';
require_once '../../model/Conexao.php';

/**
 * Created by PhpStorm.
 * User: Edmarcos
 * Date: 29/11/2016
 * Time: 23:11
 */
class EventoCTRL
{

    public function inserir(Evento $evento)
    {
        $titulo = $evento->getTitulo();
        $descricao = $evento->getDescricao();
        $data = $evento->getData();
        $ativo = $evento->getAtivo();

        $conex  = new Conexao();
        $connection = $conex->getConnection();
        $connection->exec("INSERT INTO eventos (titulo,descricao,data,ativo) VALUES ('$titulo','$descricao','$data','$ativo')");
    }

    public function show(){
        $conex  = new Conexao();
        $connection = $conex->getConnection();
        return $connection->query("SELECT * FROM eventos WHERE ativo = 1");
    }
}