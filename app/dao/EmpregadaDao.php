<?php

namespace app\dao;

use app\dao\ifc\ICrudMethodsDao;
use app\database\connection\Connection;

class EmpregadaDao implements ICrudMethodsDao
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
            $sql = "INSERT INTO empregada($sqlFields) VALUES ($sqlVals)"; 
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
            $sql = "SELECT * FROM empregada";
            $stmt = $this->connection->query($sql);
            $data = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            return json_encode($data, JSON_PRETTY_PRINT);
        } catch(\PDOException $ex){
            return array(
                'status' => 25,
                'code' => $ex->getCode(),
                'message' => $ex->getMessage()
            );
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