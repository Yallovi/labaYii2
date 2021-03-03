<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<h1>Genres</h1>

<ul>
<?php foreach ($genres as $genre): ?>
    <li>
        <?= Html::encode("{$genre->id_genre} ({$genre->name_genre})") ?>:
        <?= $genre->description_genre ?>
        <?= $genre->count ?>
    </li>
<?php endforeach; ?>
</ul>
<?= LinkPager::widget(['pagination' => $pagination]) ?>
