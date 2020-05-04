<?php

namespace application\controllers;

use application\core\Controller;

class MainController extends Controller {

  public function indexAction() {

      $vars = [
        'name' => 'Tom'
      ];

      $this->view->render("Main page", $vars);
  }

  public function contactAction() {
    $this->view->render("Contact");
}
}