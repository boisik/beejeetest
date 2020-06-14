<?php
/**
 * Created by PhpStorm.
 * User: 123
 * Date: 11.06.2020
 * Time: 17:24
 */

use Application\Core\Controller;
class Controller_Main extends Controller
{

    function action_index()
    {

      $user = new \Application\Models\User();
        $user->setName('yashka1');
        $user->setPass('12345');
        $user->create();
        $this->view->generate('main_view.php', 'template_view.php');
    }
}