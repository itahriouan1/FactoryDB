<?php

abstract class AbstractDBConnexion{
    protected $pdo;

    abstract function doQuery();

    /**
     * Get the value of pdo
     */ 
    public function getPdo()
    {
        return $this->pdo;
    }
}