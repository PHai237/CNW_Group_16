<?php
class DBConnection {
    private $host;
    private $user;
    private $pass;
    private $dbname;
    private $conn;
    public function __construct(){

        $this->host = DB_HOST;
        $this->user = DB_USER;
        $this->pass = DB_PASS;
        $this->dbname= DB_NAME;

        try{
            $this->conn = new PDO("mysql:host={$this->host};dbname={$this->dbname}", $this->user, $this->pass);
        }catch (PDOException $e){
            $this-> conn = null;
            echo "Connection failed: " . $e->getMessage();
        }
    }
    
    public function getConnection(){
        return $this->conn;
    }
}
?>
