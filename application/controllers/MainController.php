<?php

namespace application\controllers;

use application\core\Controller;

class MainController extends Controller {

  public function indexAction() {

    $result = $this->model->getNews();

      $vars = [
        'name' => 'Tom',
        'email' => $result
      ];

       $this->view->render("Main page", $vars);
  }

}