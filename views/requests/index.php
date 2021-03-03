<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\helpers\Url;


?>
<h1>Request</h1>


<span>Найти книги, написанные в 20 веке. Отсортировать по году написания</span>
<br> <br>
<ul>
<?php foreach ($model as $books): ?>
    <li>
        <?= Html::encode("{$books->id_book} ({$books->name})") ?>:
        <?= $books->release_date ?>
        <?= $books->description ?>
    </li>
<?php endforeach; ?>
</ul>


<form method="get" action="<?=Url::to(['/requests/search'])?>">
    <input class="form-control" type="text" placeholder="Поиск ..." name="search">
</form>

