<?php

/**
 * Created by PhpStorm.
 * User: mac
 * Date: 30/12/16
 * Time: 15:53
 */
class ContaDao extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function criarConta(Conta $conta)
    {
        if($this->insert($conta->parametro()))
            echo 1;
        else
            echo 0;
    }

    public function alterar($tabela,$campos,$cond,$valores)
    {
        return $this->editar($tabela,$campos,$cond,$valores);
    }

    public function logon(Conta $conta)
    {
        if (($conta->getTelefone() == USER && $conta->getSenha() == PASS) OR ($conta->getUtilizador() == USER && $conta->getSenha() == PASS)) {
            Session::init();
            Session::set('logado',1);
            Session::set('user','SYS ADMIN');
            Session::set('type','sys');
            return 1975;//entrando como SYS ADMIN
        } else {
            $condicao = '((_telefone=? AND _senha=?) OR (_utilizador=? AND _senha=?))';
            $valor = array($conta->getTelefone(), $conta->getSenha(), $conta->getUtilizador(), $conta->getSenha());
            $ctrl = $this->buscaExaustiva($conta->pegarAtributos(), $conta->pegarClasse(), $condicao, $valor);
            if ($ctrl->rowCount() == 0) {
                return 0;//caso de utilizador ou senha errada
            } else {
                $k = $ctrl->fetchObject();
                if ($k->_estado == 0) {
                    return -1;//caso em que o utilizador e a senha estao correctos, mas a conta esta desactivada
                } else {//caso feliz
                    $campos = array('*');
                    $id_funcionario = array($k->_id_funcionario);
                    $user = $this->buscaExaustiva($campos, 'funcionario', '(_id=?)', $id_funcionario)->fetchObject();
                    $id_area = array($user->_id_area);
                    $area = $this->buscaExaustiva($campos, 'area', '_id=?', $id_area)->fetchObject();
                    Session::init();
                    Session::set('logado',1);
                    Session::set('user', $user->_nome.' '.$user->_apelido);
                    Session::set('id_user', $user->_id);
                    Session::set('foto', $user->_foto);
                    Session::set('type', $area->_sigla);
                    Session::set('area', $area->_nome);
                    return $area->_sigla;
                }
            }

        }
    }
}
