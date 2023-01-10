<?php

namespace app\dao;

use app\database\connection\Connection;
use app\dao\ifc\ICrudMethodsDao;

class CasaDao implements ICrudMethodsDao
{
    
    private $connection = null;

    public function __construct()
    {
        $this->connection = Connection::getInstance();
    }

    public function register($fields, $values)
    {
        $sqlFields = '';
        $sqlVals = '';
        if(is_array($fields)){
            $sqlFields = implode(',', $fields);
        }
        if(is_array($values)){
            $sqlVals = implode(',', $values);
        }
        try{
            $sql = "INSERT INTO residencia ($sqlFields) VALUES ($sqlVals)"; 
            $stmt = $this->connection->prepare($sql);
        }catch(\PDOException $ex){
            return array(
                'code' => $ex->getCode(),
                'message' => $ex->getMessage()
            );
        }
    }

    public function show()
    {
        try {
            $sql = "SELECT * FROM <tabela>";
            $stmt = $this->connection->prepare($sql);
        } catch(\PDOException $ex){

        }

    }

    public function removeBy($id)
    {
        // TODO: Implement removeBy() method.
    }

    public function showBy($id)
    {
        // TODO: Implement showBy() method.
    }


    public function showTotal()
    {
        // TODO: Implement showTotal() method.
    }
}