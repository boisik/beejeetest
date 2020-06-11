<?php
/**
 * Created by PhpStorm.
 * User: ЛАЛАКА СМИШНАЯ
 * Date: 20.01.2019
 * Time: 19:20
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
