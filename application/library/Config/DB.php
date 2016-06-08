<?php
class Config_DB
{

    private function __construct()
    {
    }

    public static function getInstance()
    {
        static $instance = null;
        if ($instance === null) {
            $instance = new self;
        }
        return $instance;
    }

    public function getBlogDb()
    {
        return array(
            'host' => '127.0.0.1',
            'dbname' => 'test',
            'user' => 'root',
            'password' => 'cjchnws19870121',
            'charset' => 'utf8'
        );
    }

}
