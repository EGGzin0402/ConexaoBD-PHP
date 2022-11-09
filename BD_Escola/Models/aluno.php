<?php

include_once "conectar.php"; 

class Aluno

{

    private $matricula;
    private $nome;
    private $endereco;
    private $cidade;
    private $codcurso;
    private $conn;


    public function getMatricula(){

        return $this->matricula;

    }
    public function setMatricula($matriculas){
        
        $this->matricula = $matriculas;

    }
    
    public function getNome(){

        return $this->nome;

    }
    public function setNome($name){
        
        $this->nome = $name;

    }

    public function getEndereco(){

        return $this->endereco;

    }
    public function setEndereco($enderecos){
        
        $this->endereco = $enderecos;

    }

    public function getCidade(){

        return $this->cidade;

    }
    public function setCidade($cidades){
        
        $this->cidade = $cidades;

    }

    public function getCodCurso(){

        return $this->codcurso;

    }
    public function setCodCurso($CodsCursos){
        
        $this->codcurso = $CodsCursos;

    }

    function SalvarAluno()
    {

        try{

            $this->conn = new Conectar();
            $sql = $this->conn->prepare("insert into alunos values (?, ?, ?, ?, ?)");
            @$sql->bindParam(1, $this->getMatricula(), PDO::PARAM_STR);
            @$sql->bindParam(2, $this->getNome(), PDO::PARAM_STR);
            @$sql->bindParam(3, $this->getEndereco(), PDO::PARAM_STR);
            @$sql->bindParam(4, $this->getCidade(), PDO::PARAM_STR);
            @$sql->bindParam(5, $this->getCodCurso(), PDO::PARAM_STR);
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

    function ListarAlunos()
    {

        try{

            $this->conn = new Conectar();
            $sql = $this->conn->query("select * from alunos order by matricula"); 
            $sql->execute();
            return $sql->fetchAll();
            $this->conn = null;

        }
        catch(PDOException $exc)
        {

            echo "Erro ao executar a consulta. " . $exc->getMessage();

        }

    }

    function ExcluirAluno()
    {

        try{

            $this->conn = new Conectar();
            $sql = $this->conn->prepare("delete from alunos where Matricula = ?");
            @$sql->bindParam(1, $this->getMatricula(), PDO::PARAM_STR);
            
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

    function ConsultarAluno()
    {

        try{

            $this->conn = new Conectar();
            $sql = $this->conn->prepare("select * from alunos where Nome like ?");
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
            $sql = $this->conn->prepare("select * from alunos where matricula = ?");
            @$sql->bindParam(1, $this->getMatricula(), PDO::PARAM_STR);
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
            $sql = $this->conn->prepare("update alunos set Nome = ?, Endereco = ?, Cidade = ?, CodCurso = ? where Matricula = ?");
            @$sql->bindParam(1, $this->getNome(), PDO::PARAM_STR);
            @$sql->bindParam(2, $this->getEndereco(), PDO::PARAM_STR);
            @$sql->bindParam(3, $this->getCidade(), PDO::PARAM_STR);
            @$sql->bindParam(4, $this->getCodCurso(), PDO::PARAM_STR);
            @$sql->bindParam(5, $this->getMatricula(), PDO::PARAM_STR);

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