<?php
/**
 * Created by PhpStorm.
 * User: Керчь
 * Date: 15.06.2020
 * Time: 4:17
 */

use Application\Core\Controller;


class Controller_Task extends Controller
{


    function action_index()
    {
        $taskApi = new Application\Models\Task();
        $tasks = $taskApi->getList();
        $result['list'] = $tasks;
        $this->view->generate('tasklist_view.php', 'template_view.php',$result);
    }

    function action_addTask()
    {
        if ($_POST['operation'] =='addtask'){
            //var_dump($_POST);
            $userName = filter_input(INPUT_POST, 'add_name');
            $email = filter_input(INPUT_POST, 'add_email');
            $text = filter_input(INPUT_POST, 'add_text');
            $task = new \Application\Models\Task();
            $task->setUserName($userName);
            $task->setUserEmail($email);
            $task->addText($text);
            $result = $task->create();

            $this->view->generate('result_view.php', 'answer_view.php',$result);

        }else{
            $this->view->generate('addtask_view.php', 'template_view.php');
        }
    }
}