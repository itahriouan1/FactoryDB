<?php



class DBFactory{

    public static function create($esn,$username,$password)
    {
        switch (substr($esn,0,strpos($esn,':'))){
            case 'mysql':
                $esn=explode(':',$esn);
                $esn=explode(";",$esn[1]);
                $host=explode('=',$esn[0]);
                $host=$host[1];                
                $dbname=explode('=',$esn[1]);
                $dbname=$dbname[1];                 
                $db=new MySQLDBConnexion($host,$dbname,$username,$password);
            break;
            case 'sqlsrv':
                $esn=explode(':',$esn);
                $esn=explode(";",$esn[1]);
                $host=explode('=',$esn[0]);
                $host=$host[1];                
                $dbname=explode('=',$esn[1]);
                $dbname=$dbname[1];                 
                $db=new SQLServerDBConnexion($host,$dbname,$username,$password);
            break;
        default:
         throw new Exception('type BD inconnu');
        }
        return $db;
    }
}