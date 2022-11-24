<?php

class Conectar extends PDO
{
    private static $instancia;
    private $query;
    
    define('BD_SERVIDOR', 'us-cdbr-east-06.cleardb.net');
    define('BD_USUARIO', 'bd5ed7eaf61adf');
    define('BD_SENHA', '84ca6210');
    define('BD_BANCO', 'heroku_df28610eabc2cf1');


    public function __construct(){
        $this->conexao();
        $this->mysqli->query("SET NAMES 'utf8'");
        $this->mysqli->query('SET character_set_connection=utf8');
        $this->mysqli->query('SET character_set_client=utf8');
        $this->mysqli->query('SET character_set_results=utf8');
    }

    private function conexao(){
        $this->mysqli = new mysqli(BD_SERVIDOR, BD_USUARIO , BD_SENHA, BD_BANCO);
        
    }
    
    public static function getInstance()
    {
        if (!isset(self::$instancia)) {
            try {
                self::$instancia = new Conectar();
                echo 'Conectado com sucesso!';
            } catch (Exception $e) {
                echo 'Erro ao conectar...';
                exit();
            }
        }
        return self::$instancia;
    }
    public function sql($query)
    {
        $this->getInstance();
        $this->query = $query;
        $stmt = $pdo ->prepare($this->query);
        $stmt->execute();
        $pdo = null;
    }
}
