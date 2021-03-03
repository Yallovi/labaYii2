<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<h1>Authors</h1>



<ul>
<?php foreach ($authors as $author): ?>
    <li>
        <?= Html::encode("{$author->id_author} ({$author->last_name})") ?>:
        <?= $author->patronymic ?>
        <?= $author->date_of_birth ?>
        <?= $author->date_of_death ?>
        <?= $author->language_of_works ?>
        <?= $author->count ?>
    </li>
<?php endforeach; ?>
</ul>
<?= LinkPager::widget(['pagination' => $pagination]) ?>
