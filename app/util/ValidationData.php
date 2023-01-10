<?php

namespace app\util;

class ValidationData
{
    public static function validateDataValues($obj)
    {
        if(is_object($obj)){
            return array(
                'code' => 1,
                'validate' => true,
                'status' => 'success',
                'message' => 'It\'s a object'
            );
        } else {
            return array(
                'code' => 0,
                'validate' => false,
                'status' => 'fail',
                'message' => 'It\'s not a object'
            );
        }
    }
}