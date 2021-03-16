<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<nav class="nav">
    <li class="nav-item">
        <a class="nav-link active" href="author"> Обратно</a>
    </li>
</nav>

<?php
print_r($message);
$form = ActiveForm::begin(); ?>
<?php echo $form->field($model, 'id_author')->label("id")?>
<div class="form-group">
<?= Html::submitButton('Удалить', ['class' => 'btn btn-primary']) ?>
</div>
<?php ActiveForm::end(); ?>



<table>
    <?php foreach ($data as $author): ?>
        <? echo '
            <tr>
                    <td>'.$author->id_author.'</td>
                    <td>'.$author->last_name.'</td>
                    <td>'.$author->first_name.'</td>
                    <td>'.$author->date_of_birth.'</td>
                    <td>'.$author->date_of_death.'</td>
            </tr>';
        ?>
    <?php endforeach; ?>
</table>