<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<nav class="nav">
    <li class="nav-item">
        <a class="nav-link active" href="author"> Обратно</a>
    </li>
</nav>

<br><br>

<h2>Create a new Author</h2>

<?php $form = ActiveForm::begin(); ?>
    <?php echo $form->field($model, 'last_name'); ?>

    <?php echo $form->field($model, 'first_name'); ?>

    <?php echo $form->field($model, 'patronymic'); ?>

    <?php echo $form->field($model, 'date_of_birth'); ?>

    <?php echo $form->field($model, 'date_of_death'); ?>

    <?php echo $form->field($model, 'language_of_works'); ?>

    <?php echo $form->field($model, 'count'); ?>

    <?php echo Html::submitButton('Save',[
        'class' => 'btn btn-primaru'
    ]); ?>
<?php  ActiveForm::end(); 