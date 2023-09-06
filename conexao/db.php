<?php
class Conexao{
    private $host = "localhost";
    private $username = "root";
    private $senha = "";
    private $db_name = "sistema_login";
    public $conn;

    public function getConnection(){
        $this->conn = null;

        try{
            $this->conn = new PDO("mysql:host=".$this->host.";dbname=". $this->db_name, $this->username,$this->senha);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        }catch(PDOException $e){
            echo "Erro na conexao: ". $e->getMessage();
        }

        return $this->conn;
    }
}

?>