<?php

class Conectar extends PDO
{
    private static $instancia;
    private $query;
    private $host = "us-cdbr-east-06.cleardb.net";
    private $usuario = "bd5ed7eaf61adf";
    private $senha = "84ca6210";
    private $db = "heroku_df28610eabc2cf1";

    public function __construct()
    {
        parent::__construct("mysql:host=$this->host;dbname=$this->db", "$this->usuario", "$this->senha");
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
