<?php
class Database{

    private $host;
    private $db;
    private $user;
    private $password;
    private $charset;

    public function __construct(){
        $this->host = constant("URL");
        $this->db = constant("DB");
        $this->user = constant("USER");
        $this->password = constant("PASSWORD");
        $this->charset = constant("CHARSET");
    }

    function connect(){
        try{
            
            $connect = "mysql: 
            host=".$this->host.";
            dbname=".$this->db.";
            user=".$this->user.";
            password=".$this->password.";
            charset=".$this->charset;

            $option = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES => false
            ];
            $pdo = new PDO($connect, $this->user, $this->password, $option);
            return $pdo;
        }catch(PDOException $e){
            return false;
        }
    }
} 
?>