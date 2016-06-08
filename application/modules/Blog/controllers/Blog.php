<?php

class BlogController extends Base_Controller_App
{


    public $actions = array(
        "test" => "modules/Blog/actions/blog/test.php",
    );

    private function _callFunction($action)
    {
        $model = new Base_Action();
        $model->execute();
    }

    public function indexAction()
    {
        $this->_callFunction('index');

        /*
          $session = Yaf_Session::getInstance();
          $search = array();
          $params = array('title', 'content', 'name');
          foreach ($params as $param) {
          $search[$param] = $this->getParam($param);
          }
          $model = new Blog_SearchModel();
          $res = $model->get();
          $data = array(
          'search' => $search,
          'url' => $this->getUrlParts(),
          'res' => $res,
          );
          $this->getView()->assign($data);
          $this->render('index'); */
    }

    public function editAction()
    {
        $data = array();
        $this->getView()->assign($data);
        $this->render('edit');
    }

    public function deleteAction()
    {
        $data = array();
        $this->getView()->assign($data);
        $this->render('delete');
    }

}
