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
    private $conex;
    private $connection;

    /**
     * EventoCTRL constructor.
     * @param $connection
     */
    public function __construct()
    {
        $this->conex  = new Conexao();
        $this->connection = $this->conex->getConnection();
    }


    public function inserir(Evento $evento)
    {
        $titulo = $evento->getTitulo();
        $descricao = $evento->getDescricao();
        $data = $evento->getData();
        $ativo = $evento->getAtivo();

        $this->connection->exec("INSERT INTO eventos (titulo,descricao,data,ativo) VALUES ('$titulo','$descricao','$data','$ativo')");
    }

    public function show(){
        return $this->connection->query("SELECT * FROM eventos WHERE ativo = 1");
    }
}