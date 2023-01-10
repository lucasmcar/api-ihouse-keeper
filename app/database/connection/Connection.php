<?php

namespace app\database\connection;
use app\util\IniReader;


class Connection
{

    private static  $instance = null;
    
    
    public static function getInstance()
    {
        try {
            $ini = IniReader::readerIni('config.ini');
            self::$instance = new \PDO("mysql:host=".$ini['HOST'].";dbname=".$ini['DATABASE'], $ini['USER'], $ini['PASSWORD']);
            self::$instance->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            return self::$instance;
        } catch (\PDOException $ex) {
            return array(
                'status' => '0',
                'cod' => $ex->getCode(),
                'message' => $ex->getMessage()
                
            );
        }
    }
}