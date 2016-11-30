<?php

/**
 * Created by PhpStorm.
 * User: Edmarcos
 * Date: 29/11/2016
 * Time: 23:11
 */
class Evento
{
    private $titulo;
    private $descricao;
    private $data;
    private $ativo;

    /**
     * Evento constructor.
     * @param $titulo
     * @param $descricao
     * @param $data
     * @param $ativo
     */
    public function __construct($titulo, $descricao, $data, $ativo)
    {
        $this->titulo = $titulo;
        $this->descricao = $descricao;
        $this->data = $data;
        $this->ativo = $ativo;
    }

    /**
     * @return mixed
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * @param mixed $titulo
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }

    /**
     * @return mixed
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * @param mixed $descricao
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }

    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param mixed $data
     */
    public function setData($data)
    {
        $this->data = $data;
    }

    /**
     * @return mixed
     */
    public function getAtivo()
    {
        return $this->ativo;
    }

    /**
     * @param mixed $ativo
     */
    public function setAtivo($ativo)
    {
        $this->ativo = $ativo;
    }

}