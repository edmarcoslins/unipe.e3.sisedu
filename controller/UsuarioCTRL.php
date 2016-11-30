<?php

require_once '../../model/Usuario.php';
require_once '../../model/Conexao.php';

/**
 * Created by PhpStorm.
 * User: Edmarcos
 * Date: 29/11/2016
 * Time: 23:11
 */
class UsuarioCTRL
{
    private $connection;

    /**
     * EventoCTRL constructor.
     */
    public function __construct()
    {
        $conex  = new Conexao();
        $this->connection = $conex->getConnection();
    }

    public function autenticacao(Usuario $usuario)
    {
        $login = $usuario->getLogin();
        $senha = $usuario->getSenha();
        return $this->connection->query("SELECT * FROM usuarios");
    }
}