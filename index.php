<?php

require "AbstractDBConnexion.php";
require "SQLServerDBConnection.php";
require "MySQLDBConnexion.php";
require 'DBFactory.php';

$pdo= DBFactory::create('mysql:host=localhost;dbname=gestion-news','root','');
var_dump($pdo);

$pdo2=DBFactory::create('sqlsrv:server=.\SQLEXPRESS;database=BD1',"sa","pass");
var_dump($pdo2);