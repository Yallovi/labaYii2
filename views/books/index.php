<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<h1>Books</h1>

<ul>
<?php foreach ($book as $books): ?>
    <ul>
        <?= Html::encode("{$books->id_book} ({$books->name})") ?>:
        <?= $books->release_date ?>
        <?= $books->description ?>
        <br>
        <?= $books->author->last_name?>
        <?= $books->genre->name_genre ?>
        <br><br>
    </ul>
<?php endforeach; ?>
</ul>

