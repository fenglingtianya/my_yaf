<?php

class Helper_Factory
{
    public static $blog = array();

    const DB_BLOG = 'db_blog';

    public static function getBlogDao($table)
    {
        return $this->_getDao(self::DB_BLOG, $table);
    }

    private function _getDao($db, $table)
    {
        static $pdoArr = array();
        if ($pdoArr[$db]) {
            return $pdoArr[$db];
        }

        switch ($db) {
            case self::DB_BLOG:
                $pdo = $this->_getPdoInstance();
                break;
            default :
                throw new Exception($db . 'not exists');
        }
        $dao = new DB_Dao($pdo, $table);
        return $dao;
    }

    private function _getPdoInstance()
    {
        return DB_PdoFactory::getInstance()->getPdo(self::$blog);
    }

}
