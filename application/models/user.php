<?php

/**
 * Created by PhpStorm.
 * User: 123
 * Date: 11.06.2020
 * Time: 18:28
 */
namespace Application\Models;
class User
{
    private
        $adapter,
        $password,
        $name,
        $table = "users";
    function __construct()
    {
        $this->adapter = new \Application\Core\Adapter();
    }

    /**
     * устанавливает объекту заничение свойства $password
     *
     * @param string $password - пароль в открытом виде
     * @return void
     */
    public function setPass($password){
        $this->password = $password;//self::cryptPass($password);
    }

    /**
     * устанавливает объекту значение свойства $name
     *
     * @param string $name - имя пользователя
     * @return void
     */
    public function setName($name){
        $this->name = $name;
    }

    /**
     * Производится попытка авторизации
     * @return array|boolean
     */
    function  tryAuth(){
        $this->name=stripslashes($this->name);
        $this->name=htmlspecialchars($this->name);
        $this->password=stripslashes($this->password);
        $this->password=htmlspecialchars($this->password);
        $errors = array();
        if (empty($this->name)){
            $errors['emptyName'] = "Введите имя";
            return $errors;
        }

        if (empty($this->password)){
            $errors['emptyPass'] = "Введите пароль";
            return $errors;
        }

        $querry = "SELECT *  
                   FROM $this->table
                   WHERE   name = '$this->name'
                ;";

        $result = $this->adapter->sqlExec($querry);
        $result = $result->fetchAll();
       // var_dump($result);

        if (empty($result)){
            $errors['emptyUser'] = "Пользователя с таким именем не существует";
            return $errors;
        }

        if($result[0]['password'] != $this->cryptPass($this->password)){
            $errors['wrongPass'] = "Пароль указан неверно";
        }
        $result = empty($errors) ? true : $errors;

        return $result;
    }

    public function create(){
        $querry = "INSERT INTO $this->table
                   SET
                   
                   name = '$this->name',
                   password   = '$this->password'              
                  
                  ;";

        $result = $this->adapter->sqlExec($querry);
        var_dump($result);
        return $result;
    }



    /**
     * Возвращает хэш от пароля.
     *
     * @param string $password - пароль в открытом виде
     * @return string
     */
    public static function cryptPass($password)
    {
        return md5($password . sha1(\Setup::$SECRET_SALT));
    }




}