<?php
/**
 * Created by PhpStorm.
 * User: 123
 * Date: 15.06.2020
 * Time: 16:37
 */

namespace Application\Models;


class TaskApi
{

    function __construct()
    {
        $this->obj = new \Application\Models\Task();
        $this->adapter = new \Application\Core\Adapter();
    }

    public function getList($columnName = 'username',$vector = ' ASC')
    {
        $tableName = $this->obj->getTableName();

        $querry = "SELECT *  
                   FROM $tableName
                   ORDER BY $columnName $vector
                ;";


        $result = $this->adapter->sqlExec($querry);
        $result = $result->fetchAll();
        foreach ($result as $key => $one){
            $newobj = new \Application\Models\Task();
            $newobj->setUserName($one['username']);
            $newobj->setUserEmail($one['useremail']);
            $newobj->addText($one['text']);
            $newobj->setStatus($one['status']);
            $newobj->setEdited($one['edited']);
            $result[$key] = $newobj;
            unset($newobj);
        }

        return $result;
    }

}