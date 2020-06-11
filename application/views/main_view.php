<?php
/**
 * Created by PhpStorm.
 * User: 123
 * Date: 11.06.2020
 * Time: 17:26
 */
?>
<div class="">

    <div class="menu-wrap">
        <nav class="menu">
            <div class="icon-list">
                <a href="http://test1melnikov.local/"><i class="fa fa-fw fa-newspaper-o"></i><span>Тестовое задание 1</span></a>
                <a href="http://melnikov.local/task2/go/"><i class="fa fa-fw fa-newspaper-o"></i><span>Тестовое задание 2</span></a>
                <a href="http://melnikov.local/task3/"><i class="fa fa-fw fa-newspaper-o"></i><span>Тестовое задание 3</span></a>
                <a href="http://melnikov.local/task4/go/"><i class="fa fa-fw fa-newspaper-o"></i><span>Тестовое задание 4</span></a>
                <a href="http://melnikov.local/task5/go/"><i class="fa fa-fw fa-newspaper-o"></i><span>Тестовое задание 5</span></a>
                <a href="http://melnikov.local/task7/go/"><i class="fa fa-fw fa-newspaper-o"></i><span>Тестовое задание 7</span></a>

                <a href="http://melnikov.local/sqltask1and2/"><i class="fa fa-fw fa-newspaper-o"></i><span>Тестовое задание SQL 1 и 2</span></a>

                <a href="http://melnikov.local/sqltask3/"><i class="fa fa-fw fa-newspaper-o"></i><span>Тестовое задание SQL 3</span></a>

                <a href="#"><i class="fa fa-fw fa-newspaper-o"></i><span>Тестовое задание 6( не готово)</span></a>



            </div>
        </nav>
        <button class="close-button" id="close-button"></button>
    </div>
    <button class="menu-button" id="open-button"></button>
    <div class="content-wrap">
        <div class="content">
            <header class="codrops-header">

                <h1>Нажав на меню слева, можно перейти на страницы реализации пунктов тестового задания</h1>

            </header>
            <!-- Related demos -->
            <?php
            echo \Application\Core\Adapter::isConnected()
            ?>
</div>
</div><!-- /content-wrap -->
</div><!-- /container -->