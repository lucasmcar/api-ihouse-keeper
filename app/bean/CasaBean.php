<?php

namespace app\bean;

use app\dao\CasaDao;


class CasaBean
{
    private $dao;

    public function __construct()
    {
        $this->dao = new CasaDao();
    }
    public function insert($fields, $values)
    {
        $result = $this->dao->register($fields, $values);

    }
}