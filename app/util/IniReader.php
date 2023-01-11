<?php

namespace app\util;


class IniReader
{

    public static function readerIni($pathFile)
    {
        
        $file = realpath($_SERVER['DOCUMENT_ROOT'].'//ihouseapi//'.$pathFile);
        echo file_exists($file);
        if(file_exists($file) && pathinfo($file, PATHINFO_EXTENSION) == 'ini'){
            $conf = parse_ini_file($file);
            return $conf;
        }

        return array(
            'code' => 100,
            'message' => 'File not exists or isn\'t a ini file',
            'solution' => 'Try to place a ini file in root project'
        );
        
    }
}