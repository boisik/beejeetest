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
        $this->password = self::cryptPass($password);
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

        $errors = array();
        if (isEmpty($this->name)){
            $errors[] = "Введите имя";
        }
        if (isEmpty($this->password)){
            $errors[] = "Введите пароль";
        }

        $querry = "SELECT *  
                   FROM '$this->table'
                   WHERE   name = '$this->name'
                ;";

        $result = $this->adapter->sqlExec($querry);
        $result = $result->fetchAll();
        if (empty($result)){
            $errors[] = "Пользователя с таким именем не существует";
        }

        if (!empty($result)) return true;



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