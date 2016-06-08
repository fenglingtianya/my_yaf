<?php

class TestAction extends Base_Action
{

    public function execute()
    {
        echo get_called_class();
    }

    protected function f()
    {
        
    }

}
