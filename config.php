<?php


class Config {
     private const DBHOST = '192.168.0.250';
     private const DBUSER = 'lovix';
     private const DBPASS = 'Molly_2024';
     private const DBNAME = 'gecofi';
     
     private $dsn ='mysql:host=' . self::DBHOST . ';dbname=' . self::DBNAME . '';
     
     protected $conn = null;
      
     public function __construct() {
        try {
            $this->conn = new PDO($this->dsn, self::DBUSER, self::DBPASS);
            $this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        
            } catch (PDOException $e) {
            die ('Error: ' .$e->getMessage());
            }
        }
    }


?>
