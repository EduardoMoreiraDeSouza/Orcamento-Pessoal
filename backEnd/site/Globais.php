<?php

use site\Usuario;

class Globais{

    private $codigoMySql;
    private $erro;
    private $acesso;
    private $paginaPai;

    private $localServidor;

    protected function getCodigoMySql()
    {
        return $this -> codigoMySql;
    }

    protected function setCodigoMySql($codigoMySql): void
    {
        $this -> codigoMySql = $codigoMySql;
    }


    public function getSessao()
    {

        $this -> iniciarSessao();

        if (!isset($_SESSION['usuario']))
            return null;

        return $_SESSION['usuario'];

    }

    protected function setSessao($usuario): void
    {

        $this -> iniciarSessao();
        $_SESSION['usuario'] = $usuario;

    }

    protected function destruirSessao(): void
    {
        session_destroy();
    }

    private function iniciarSessao(): void
    {
        if(!isset($_SESSION))
        {
            session_start();
        }
    }

    protected function getPaginaPai()
    {
        return $this -> paginaPai;
    }

    protected function setPaginaPai($paginaPai): void
    {
        $this -> paginaPai = $paginaPai;
    }


    protected function getLocalServidor()
    {
        $this -> setLocalServidor('local'); // local ou global
        return $this -> localServidor;
    }

    protected function setLocalServidor($localServidor): void
    {
        $this -> localServidor = $localServidor;
    }
}
