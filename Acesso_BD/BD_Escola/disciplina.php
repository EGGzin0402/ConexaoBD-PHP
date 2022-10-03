<?php

include_once "conectar.php"; 

class Disciplina

{

    private $coddisc;
    private $nome;
    private $conn;

    public function getCodDisc(){

        return $this->coddisc;

    }

    public function setCodDisc($coddisc){
        
        $this->coddisc = $coddisc;

    }
    
    public function getNome(){

        return $this->nome;

    }

    public function setNome($nome){
        
        $this->nome = $nome;

    }

    function SalvarDisciplina()
    {

        try{

            $this->conn = new Conectar();
            $sql = $this->conn->prepare("insert into disciplinas values (?, ?)");
            @$sql->bindParam(1, $this->getCodDisc(), PDO::PARAM_STR);
            @$sql->bindParam(2, $this->getNome(), PDO::PARAM_STR);
            if ($sql->execute() == 1)
            {

                return "Registro salvo com sucesso!";

            }
            $this->conn = null;
        }
        catch (PDOException $exc)
        {

            echo "Erro ao salvar o registro. " . $exc->getMessage();

        }

    }

    function ListarDisciplina()
    {

        try{

            $this->conn = new Conectar();
            $sql = $this->conn->query("select * from disciplinas order by CodDisciplina");
            $sql->execute();
            return $sql->fetchAll();
            $this->conn = null;

        }
        catch(PDOException $exc)
        {

            echo "Erro ao executar a consulta. " . $exc->getMessage();

        }

    }

    function ExcluirDisciplina()
    {

        try{

            $this->conn = new Conectar();
            $sql = $this->conn->prepare("delete from disciplinas where CodDisciplina = ?");
            @$sql->bindParam(1, $this->getCodDisc(), PDO::PARAM_STR);
            
            if ($sql->execute() == 1)
            {

                return "Excluído com sucesso!";

            }
            else
            {

                return "Erro na exclusão";

            }

            $this->conn = null;

        }
        catch(PDOException $exc)
        {

            echo "Erro ao excluir. " . $exc->getMessage();

        }

    }

    function ConsultarDisciplina()
    {

        try{

            $this->conn = new Conectar();
            $sql = $this->conn->prepare("select * from disciplinas where NomeDisciplina like ?");
            @$sql->bindParam(1, $this->getNome(), PDO::PARAM_STR);
            $sql->execute();
            return $sql->fetchAll();
            $this->conn = null;

        }
        catch(PDOException $exc){

            echo "Erro ao executar a consulta. " . $exc->getMessage();

        }

    }

}

?>