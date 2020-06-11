<?php
/**
 * Created by PhpStorm.
 * User: 123
 * Date: 11.06.2020
 * Time: 18:25
 */
namespace Application\Core;
class Helper
{





    /**
     * Обертка стандартного вардампа
     */

    public static function vardump($var)
    {
        static $int=0;
        echo '<pre style="display: inline-block;width: 30%;margin-top: 0px"><b style="background: blue;padding: 1px 5px;">'.$int.'</b> ';
        var_dump($var);
        echo '</pre>';
        $int++;
    }








}