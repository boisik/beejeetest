<?php

/**
 * Created by PhpStorm.
 * User: 123
 * Date: 11.06.2020
 * Time: 18:28
 */
namespace Application\Models;
use Application\Core\Helper;


class Task
{
    private
        $adapter,
        $userName,
        $userEmail,
        $status,
        $edited,
        $text,
        $table = "tasks";
    function __construct()
    {
        $this->adapter = new \Application\Core\Adapter();
    }



    /**
     * устанавливает объекту значение свойства userName
     *
     * @param string $userName - имя пользователя
     * @return void
     */
    public function setUserName($userName){
        $this->userName = $userName;
    }

    public function setUserEmail($userEmail){
        $this->userEmail = $userEmail;
    }

    public function addText($text){
        $this->text = $text;
    }

    public function setStatus($status){
        $this->status = $status;
    }

    /**
     * Проверка введенных данных
     * @return array|boolean
     */
    public function checkData()
    {
        $this->userName=stripslashes($this->userName);
        $this->userName=htmlspecialchars($this->userName);
        $this->userEmail=stripslashes($this->userEmail);
        $this->userEmail=htmlspecialchars($this->userEmail);
        $this->text=stripslashes($this->text);
        $this->text=htmlspecialchars($this->text);
        $result = array();
        if (empty($this->userName)){
            $result['errors']['emptyUserName'] = "Введите имя";

        }

        if (empty($this->userEmail) || !filter_var($this->userEmail, FILTER_VALIDATE_EMAIL)){
            $result['errors']['emptyUserEmail'] = "Введите корректный адрес электронной почты";
        }

        if (empty($this->text)){
            $result['errors']['emptyText'] = "Опишите задачу";
        }

        $result['noErrors'] = !isset($result['errors']) ? true : false;
        return $result;
    }


    public function create()
    {
        $result = $this->checkData();
        if (isset($result['errors'])){
            return $result['errors'];
        }

        $querry = "INSERT INTO $this->table
                   SET
                   
                   username = '$this->userName',
                   useremail = '$this->userEmail', 
                   text = '$this->text'
                  
                  ;";

        $this->adapter->sqlExec($querry);

        return $result['OK']= 'Задача добавлена, перейдите к списку задач, используя верхнее меню';
    }













}