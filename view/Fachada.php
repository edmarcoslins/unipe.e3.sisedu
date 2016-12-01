<?php
require_once '../../controller/EventoCTRL.php';
require_once '../../controller/UsuarioCTRL.php';
require_once '../../model/Evento.php';
require_once '../../model/Usuario.php';

/**
 * Created by PhpStorm.
 * User: Edmarcos
 * Date: 29/11/2016
 * Time: 23:34
 */
class Fachada
{
    /* EVENTO */
    public function inserirEvento(Evento $evento)
    {
        $eventoCtrl = new EventoCTRL();
        $eventoCtrl->inserir($evento);
    }

    public function exibeEvento()
    {
        $eventoCtrl = new EventoCTRL();
        $res = $eventoCtrl->show();
        return $res;
    }

    /* USUÁRIO */
    public function autenticaUsuario(Usuario $usuario)
    {
        $usuarioCtrl = new UsuarioCTRL();
        $res = $usuarioCtrl->autenticacao($usuario);
        foreach ($res as $line){
            if ($line[0] != null){
                if($line[3] == 1){
                    if($line['6'] == 1){
                        echo "<script>alert('Usuário já está logado');</script>";
                    } else {
                        $this-$this->ativaUsuario($line['0']);
                        session_start("accessAdministrador");
                        $_SESSION['cod'] = $line['0'];
                        $_SESSION['login'] = $line['1'];
                        $_SESSION['senha'] = $line['2'];
                        $_SESSION['type_user'] = $line['3'];
                        $_SESSION['nome'] = $line['4'];
                        $_SESSION['contato'] = $line['5'];
                        $_SESSION['ativo'] = $line['6'];
                        echo "<meta HTTP-EQUIV='Refresh' CONTENT='0;URL=http://localhost:8080/unipe.e3.sisedu/view/admin/painel_administrador/'>";
                    }
                } elseif ($line[3] == 2) {
                    if($line['6'] == 1){
                        echo "<script>alert('Usuário já está logado');</script>";
                    } else {
                        $this-$this->ativaUsuario($line['0']);
                        session_start("accessAluno");
                        $_SESSION['cod'] = $line['0'];
                        $_SESSION['login'] = $line['1'];
                        $_SESSION['senha'] = $line['2'];
                        $_SESSION['type_user'] = $line['3'];
                        $_SESSION['nome'] = $line['4'];
                        $_SESSION['contato'] = $line['5'];
                        $_SESSION['ativo'] = $line['6'];
                        echo "<meta HTTP-EQUIV='Refresh' CONTENT='0;URL=http://localhost:8080/unipe.e3.sisedu/view/admin/painel_aluno/'>";
                    }
                } elseif ($line[3] == 3) {
                    if($line['6'] == 1){
                        echo "<script>alert('Usuário já está logado');</script>";
                    } else {
                        $this-$this->ativaUsuario($line['0']);
                        session_start("accessProfessor");
                        $_SESSION['cod'] = $line['0'];
                        $_SESSION['login'] = $line['1'];
                        $_SESSION['senha'] = $line['2'];
                        $_SESSION['type_user'] = $line['3'];
                        $_SESSION['nome'] = $line['4'];
                        $_SESSION['contato'] = $line['5'];
                        $_SESSION['ativo'] = $line['6'];
                        echo "<meta HTTP-EQUIV='Refresh' CONTENT='0;URL=http://localhost:8080/unipe.e3.sisedu/view/admin/painel_professor/'>";
                    }
                }
            }
        }
    }

    public function ativaUsuario($userCod){
        $usuario = new Usuario(null,null);
        $usuario->setUsuario($userCod);
        $upAtivo = new UsuarioCTRL();
        $upAtivo->atualizaAtivo($usuario);
    }

}