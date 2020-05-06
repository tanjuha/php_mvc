<?php

namespace application\controllers;

use application\core\Controller;
use application\lib\Db;

class MainController extends Controller {

  public function indexAction() {

    $db = new Db;

    $data = $db->row('SELECT email from users');
    // debug($data);

      $vars = [
        'name' => 'Tom'
      ];

       $this->view->render("Main page", $vars);
  }

//   public function contactAction() {
//     $this->view->render("Contact");
// }
}