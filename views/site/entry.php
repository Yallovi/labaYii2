<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Лабораторная №1';
?>

<p style="margin-top:50px">Вы ввели следующую информацию:</p>
<ul>
    <li><label>Ваше имя</label>: <?= Html::encode($model->name) ?></li>
    <li><label>Ваша почта</label>: <?= Html::encode($model->email) ?></li>
    <li><label>Ваш возраст</label>: <?= Html::encode($model->age) ?></li>
    <li><label>Дата посещения</label>: <?= Html::encode($model->date) ?></li>
    <li><label>Любимая кухня</label>: <?= Html::encode($model->kitchen) ?></li>
    <li><label>Посоветуете наш ресторан?</label>: <?= Html::encode($model->callback) ?></li>
    <li><label>Ваш отзыв</label>: <?= Html::encode($model->text) ?></li>
</ul>