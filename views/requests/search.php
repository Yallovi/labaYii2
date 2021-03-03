<? use yii\helpers\Html;?>

<h2>Результаты поиска по запросу <?= $search ?></h2>


<ul>
<?php foreach ($books as $book): ?>
    <li>
        <?= Html::encode("{$book->id_book} ({$book->name})") ?>:
        <?= $book->release_date ?>
        <?= $book->description ?>
    </li>
<?php endforeach; ?>
</ul>