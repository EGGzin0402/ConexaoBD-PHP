<?php

include_once 'c:\xampp\htdocs\Acesso_BD\BD_Produto\Controler\conectar.php';

//Parte 1 - Atributos

class Produto
{
    private $id;
    private $nome;
    private $estoque;
    private $conn;

    // Parte 2 - Getters e Setters

    public function getId()
    {
        return $this->id;
    }

    public function setId($iid)
    {
        $this->id = $iid;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($name)
    {
        $this->nome = $name;
    }

    public function getEstoque()
    {
        return $this->estoque;
    }

    public function setEstoque($estoqui)
    {
        $this->estoque = $estoqui;
    }

    //Parte 3 - Métodos

    public function Salvar()
    {
        try {
            $this->conn = new Conectar();
            $sql = $this->conn->prepare('insert into produto values (null, ?, ?)');
            @$sql->bindParam(1, $this->getNome(), PDO::PARAM_STR);
            @$sql->bindParam(2, $this->getEstoque(), PDO::PARAM_STR);
            if ($sql->execute() == 1) {
                return 'Registro salvo com sucesso!';
            }
            $this->conn = null;
        } catch (PDOException $exc) {
            echo 'Erro ao salvar o registro. ' . $exc->getMessage();
        }
    }

    public function Alterar()
    {
        try {
            $this->conn = new Conectar();
            $sql = $this->conn->prepare('select * from produto where id = ?');
            @$sql->bindParam(1, $this->getId(), PDO::PARAM_STR);
            $sql->execute();

            return $sql->fetchAll();
            $this->conn = null;
        } catch (PDOException $exc) {
            echo 'Erro ao alterar. ' . $exc->getMessage();
        }
    }

    public function Alterar2()
    {
        try {
            $this->conn = new Conectar();
            $sql = $this->conn->prepare('update produto set nome = ?, estoque = ? where id = ?');
            @$sql->bindParam(1, $this->getNome(), PDO::PARAM_STR);
            @$sql->bindParam(2, $this->getEstoque(), PDO::PARAM_STR);
            @$sql->bindParam(3, $this->getId(), PDO::PARAM_STR);

            if ($sql->execute() == 1) {
                return 'Registro alterado com sucesso!';
            }
            $this->conn = null;
        } catch (PDOException $exc) {
            echo 'Erro ao salvar o registro. ' . $exc->getMessage();
        }
    }

    public function Consultar()
    {
        try {
            $this->conn = new Conectar();
            $sql = $this->conn->prepare('select * from produto where nome like ?');
            @$sql->bindParam(1, $this->getNome(), PDO::PARAM_STR);
            $sql->execute();

            return $sql->fetchAll();
            $this->conn = null;
        } catch(PDOException $exc) {
            echo 'Erro ao executar a consulta. ' . $exc->getMessage();
        }
    }

    public function Exclusao()
    {
        try {
            $this->conn = new Conectar();
            $sql = $this->conn->prepare('delete from produto where id = ?');
            @$sql->bindParam(1, $this->getId(), PDO::PARAM_STR);

            if ($sql->execute() == 1) {
                return 'Excluído com sucesso!';
            } else {
                return 'Erro na exclusão';
            }

            $this->conn = null;
        } catch(PDOException $exc) {
            echo 'Erro ao excluir. ' . $exc->getMessage();
        }
    }

    public function Listar()
    {
        try {
            $this->conn = new Conectar();
            $sql = $this->conn->query('select * from produto order by id');
            $sql->execute();

            return $sql->fetchAll();
            $this->conn = null;
        } catch(PDOException $exc) {
            echo 'Erro ao executar a consulta. ' . $exc->getMessage();
        }
    }
} //Encerramento da classe Produto
