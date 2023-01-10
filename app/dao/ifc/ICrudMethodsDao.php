<?php

namespace app\dao\ifc;

interface ICrudMethodsDao
{
    /**
     * @param array $fields
     * @param array $values
     * @return bool
     */
    public function register($fields, $values);
    public function show();
    public function removeBy($id);
    public function showBy($id);
    public function showTotal();
}