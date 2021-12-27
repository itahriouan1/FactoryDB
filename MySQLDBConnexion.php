<?php



class MySQLDBConnexion extends AbstractDBConnexion{

    
    public function __construct($host,$dbname,$username,$password)
    {
        $this->pdo=new PDO("mysql:host=".$host.";dbname=".$dbname, $username, $password);
        return $this->pdo;
    }

    public function doQuery()
    {
        
    }
}