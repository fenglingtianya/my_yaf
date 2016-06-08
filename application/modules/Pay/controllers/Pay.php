<?php

class PayController extends Base_Controller_App
{
    public $actions = array(
        "test" => "modules/Pay/actions/pay/test.php",
    );

    public function indexAction()
    {
        echo 'index pay';
        exit;
    }

}
