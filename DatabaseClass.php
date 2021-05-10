<?php

namespace Config;
use PDO;

class DatabaseClass{	

	
    private $connection = '';
    private $username   = 'root';
    private $password   = '';
    private $dbhost     = 'localhost';
    private $dbname     = 'oop_pdo';
	
    public function __construct(){
        try{
            $this->connection = new PDO("mysql:host={$this->dbhost};dbname={$this->dbname};", $this->username, $this->password);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            
        }catch(Exception $e){
            throw new Exception($e->getMessage());   
        }	
    }
    
    public function insert($statement = "",$parameters = []){
        try{
            header('Content-type:application/json;charset=utf-8');
            $this->executeStatement($statement, $parameters);
            echo json_encode(["status" => "success","msg" => "Record Sucessfully Added"]);
        }catch(Exception $e){
            throw new Exception($e->getMessage());
        }
    }

    public function selectAll( $statement = "" , $parameters = [] ){
        try{
            $stmt = $this->executeStatement($statement, $parameters);
            return $stmt->fetchAll();
        }catch(Exception $e){
            throw new Exception($e->getMessage());
        }
    }
    
    public function update(){
        try{	
            $this->executeStatement( $statement , $parameters );
            
        }catch(Exception $e){
            throw new Exception($e->getMessage());   
        }	
    }		
    
    public function remove(){
        try{	
            $this->executeStatement( $statement , $parameters );
            
        }catch(Exception $e){
            throw new Exception($e->getMessage());   
        }	
    }		
    
    // execute statement
    private function executeStatement($statement = "", $parameters  = []){
        try{
			
            $stmt = $this->connection->prepare($statement);
            $stmt->execute($parameters);
            return $stmt;
            
        }catch(Exception $e){
            throw new Exception($e->getMessage());   
        }		
    }
    
}


?>