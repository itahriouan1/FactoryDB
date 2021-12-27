<?php

class SQLServerDBConnexion extends AbstractDBConnexion{

    
    public function __construct($host,$dbname,$username,$password)
    {
        $this->pdo=new PDO("sqlsrv:server=".$host.";database=".$dbname, $username, $password);
        return $this->pdo;
    }

    public function doQuery()
    {
        
    }
}