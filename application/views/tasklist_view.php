<?php
/**
 * Created by PhpStorm.
 * User: 123
 * Date: 15.06.2020
 * Time: 15:57
 */
?>
<div class="row">
    <div class="col-md-2  col-lg-2 col-sm-2 col-xs-2 center-block">
        Имя
    </div>
    <div class="col-md-2  col-lg-2 col-sm-3 col-xs-2 center-block">
       Почта
    </div>
    <div class="col-md-4  col-lg-4 col-sm-4 col-xs-3 center-block">
       Текст
    </div>
    <div class="col-md-2  col-lg-2 col-sm-2 col-xs-2 center-block">
       Статусы
    </div>
    <div class="col-md-2  col-lg-2 col-sm-2 col-xs-2 center-block">

    </div>


</div>
<div class="row">
<?php foreach ($data['list'] as $task){ ?>

    <div class="col-md-2  col-lg-2 col-sm-2 col-xs-2 center-block">
        <?php printf($task->getUserName());  ?>
    </div>
    <div class="col-md-2  col-lg-2 col-sm-3 col-xs-2 center-block">
        <?php printf($task->getUserEmail());  ?>
    </div>
    <div class="col-md-4  col-lg-4 col-sm-4 col-xs-3 center-block">
        <?php printf($task->getText());  ?>
    </div>
    <div class="col-md-2  col-lg-2 col-sm-2 col-xs-2 center-block">
        <?php
        $status = $task->getStatus();
        $mod = $task->getEdited();
        $status ? printf('Выполнено') : printf('Не Выполнено <br>');
        $mod ? printf('Было отредактировано'):printf('Не редактировалось');
        ?>
    </div>
    <div class="col-md-2  col-lg-2 col-sm-2 col-xs-2 center-block">

    </div>

 <? } ?>
</div>
