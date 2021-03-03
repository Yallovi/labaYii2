<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Лабораторная №1';
?>
<div style='background: grey; padding: 10px 15px; margin-bottom:50px' class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

</div>

<?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'name')->label('Ваше имя')?>
    <?= $form->field($model, 'email')->label('Ваша почта') ->input('email'); ?>
    <?= $form->field($model, 'age')->label('Ваш возраст')->input('integer') ?>
    <?= $form->field($model, 'date')->label('Дата посещения')->input('date'); ?>
    <?= $form->field($model, 'kitchen')->label('Любимая кухня')->dropDownList([
    'Русская' => 'Русская',
    'Кавказкая' => 'Кавказкая',
    'Армянская'=>'Армянская'
]); ?>
    <?= $form->field($model, 'callback')->label('Посоветуете наш ресторан?')->radioList([
        'Да' => 'Да',
        'Нет' => 'Нет', 
        ] ); ?>
    <?= $form->field($model, 'text')->label('Ваш отзыв')->textarea() ?>
    <div class="form-group">
        <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary']) ?>
    </div>
<?php ActiveForm::end(); ?>