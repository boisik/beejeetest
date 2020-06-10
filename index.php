<?php
/**
 * Created by PhpStorm.
 * User: 123
 * Date: 10.06.2020
 * Time: 18:43
 */

ini_set('display_errors', 1);
include('application/core/autoloader.php');
//require('application/bootstrap.php');
use Application\Bootstrap;
class Setup extends Application\Bootstrap
{
    /**
     * Инициализирует настройки проекта
     */
    public static function init()
    {

        parent::init();
    }
}

\Setup::init();