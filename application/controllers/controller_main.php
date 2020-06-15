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

        $taskApi = new Application\Models\TaskApi();
        $tasks = $taskApi->getList();
        $result['list'] = $tasks;
        $this->view->generate('tasklist_view.php', 'template_view.php',$result);
    }
}