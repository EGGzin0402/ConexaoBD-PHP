<?php

include_once "conectar.php"; 

class Curso

{

    private $codcurso;
    private $nome;
    private $coddisc1;
    private $coddisc2;
    private $coddisc3;
    private $conn;


    public function getCodDisc1(){

        return $this->coddisc1;

    }

    public function setCodDisc1($coddisc1){
        
        $this->coddisc1 = $coddisc1;

    }
    
    public function getNome(){

        return $this->nome;

    }

    public function setNome($nome){
        
        $this->nome = $nome;

    }

    public function getCodDisc2(){

        return $this->coddisc2;

    }

    public function setCodDisc2($coddisc2){
        
        $this->coddisc2 = $coddisc2;

    }

    public function getCodDisc3(){

        return $this->coddisc3;

    }

    public function setCodDisc3($coddisc3){
        
        $this->coddisc3 = $coddisc3;

    }

    public function getCodCurso(){

        return $this->codcurso;

    }

    public function setCodCurso($codcurso){
        
        $this->codcurso = $codcurso;

    }

    function SalvarCurso()
    {

        try{

            $this->conn = new Conectar();
            $sql = $this->conn->prepare("insert into cursos values (null, ?, ?, ?, ?)");
            @$sql->bindParam(1, $this->getNome(), PDO::PARAM_STR);
            @$sql->bindParam(2, $this->getCodDisc1(), PDO::PARAM_STR);
            @$sql->bindParam(3, $this->getCodDisc2(), PDO::PARAM_STR);
            @$sql->bindParam(4, $this->getCodDisc3(), PDO::PARAM_STR);
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

    function ListarCurso(){

        try{

            $this->conn = new Conectar();
            $sql = $this->conn->query("select * from cursos order by codcurso");
            $sql->execute();
            return $sql->fetchAll();
            $this->conn = null;

        }
        
        catch(PDOException $exc)
        {

            echo "Erro ao executar a consulta. " . $exc->getMessage();

        }

    }

    function ExcluirCurso()
    {

        try{

            $this->conn = new Conectar();
            $sql = $this->conn->prepare("delete from cursos where CodCurso = ?");
            @$sql->bindParam(1, $this->getCodCurso(), PDO::PARAM_STR);
            
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

    function ConsultarCurso()
    {

        try{

            $this->conn = new Conectar();
            $sql = $this->conn->prepare("select * from cursos where Nome like ?");
            @$sql->bindParam(1, $this->getNome(), PDO::PARAM_STR);
            $sql->execute();
            return $sql->fetchAll();
            $this->conn = null;

        }
        catch(PDOException $exc){

            echo "Erro ao executar a consulta. " . $exc->getMessage();

        }

    }

    function Alterar()
    {
        try
        {

            $this->conn = new Conectar();
            $sql = $this->conn->prepare("select * from cursos where CodCurso = ?");
            @$sql->bindParam(1, $this->getCodCurso(), PDO::PARAM_STR);
            $sql->execute();
            return $sql->fetchAll();
            $this->conn = null;
    
        }

        catch (PDOException $exc){

            echo "Erro ao alterar. " . $exc->getMessage();
    
        }
    

    }

    function Alterar2()
    {

        try{

            $this->conn = new Conectar();
            $sql = $this->conn->prepare("update cursos set Nome = ?, CodDisc1 = ?, CodDisc2 = ?, CodDisc3 = ? where CodCurso = ?");
            @$sql->bindParam(1, $this->getNome(), PDO::PARAM_STR);
            @$sql->bindParam(2, $this->getCodDisc1(), PDO::PARAM_STR);
            @$sql->bindParam(3, $this->getCodDisc2(), PDO::PARAM_STR);
            @$sql->bindParam(4, $this->getCodDisc3(), PDO::PARAM_STR);
            @$sql->bindParam(5, $this->getCodCurso(), PDO::PARAM_STR);

            if ($sql->execute() == 1)
            {

                return "Registro alterado com sucesso!";

            }
            $this->conn = null;

        }
        catch (PDOException $exc)
        {

            echo "Erro ao salvar o registro. " . $exc->getMessage();

        }


    }

}

?>