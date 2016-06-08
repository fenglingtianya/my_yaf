<?php



class Base_Action extends Yaf_Action_Abstract
{

    public function execute()
    {
        echo get_called_class() . '   run';
        exit;
    }

    protected function f()
    {
        
    }

}
