<?php

class Base_Controller_App extends Yaf_Controller_Abstract
{

    public function getParam($name, $default = null)
    {
        return isset($_REQUEST[$name]) ? $_REQUEST[$name] : $default;
    }

    public function getUrlParts()
    {
        $request = $this->getRequest();
        $module = $request->getModuleName();
        $controller = $request->getControllerName();
        $action = $request->getActionName();
        return array(
            'module' => $module,
            'controller' => $controller,
            'action' => $action,
            'url' => "/$module/$controller/$action",
        );
    }

    public function renderJson($arr)
    {
        header('Content-Type: Application/Json');
        echo json_encode($arr);
        exit;
    }

}
