<?php

class DB_Dao
{
    private $_pdo;
    private $_table;

    public function __construct($pdo, $table)
    {
        $this->_pdo = $pdo;
        $this->_table = $table;
    }

    public function getOne($moreSql, $condition, $field)
    {
        $sql = "select $field from $this->_table ";
        $param = array();
        foreach ($condition as $key => $v) {
            $param[':' . $key] = $v;
        }
        $where = 'where ' . join(' and ', array_keys($param));

        try {
            $sth = $this->_pdo->prepare($sql);
            $sth->execute($param);
        } catch (PDOException $exc) {
            echo $exc->getTraceAsString();
        }
    }

}
