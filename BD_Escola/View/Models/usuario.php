<?php

include_once 'conectar.php';

class Usuario
{
    private $login;
    private $senha;
    private $conn;

    public function getLogin()
    {
        return $this->login;
    }

    public function setLogin($login)
    {
        $this->login = $login;
    }

    public function getSenha()
    {
        return $this->senha;
    }

    public function setSenha($senha)
    {
        $this->senha = $senha;
    }

    public function logar()
    {
        try {
            $this->conn = new Conectar();
            $sql = $this->conn->prepare("SELECT * FROM usuario WHERE login like ? AND senha = ?");
            @$sql->bindParam(1, $this->getLogin(), PDO::PARAM_STR);
            @$sql->bindParam(2, $this->getSenha(), PDO::PARAM_STR);
            $sql->execute();
            return $sql->fetchAll();
            $this->conn = null;
        } catch (PDOException $exc) {
            echo "Erro ao executar consulta: " . $exc->getMessage();
        }
    }
}
