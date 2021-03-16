<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\helpers\Url;


?>
<h1>Запросы</h1>

<h3> 1. Найти книги, написанные в 20 веке. Отсортировать по году написания</h3>

<table class="table table-light">
    <thead>
        <tr>
            <th>ID</th>
            <th>Название книги</th>
            <th>Дата выпуска</th>
            <th>Описание</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($model as $books): ?>
            <tr>
            <td><?=$books->id_book?></td>   
            <td><?= $books->name ?></td>
            <td><?= $books->release_date ?></td>
            <td><?= $books->description ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>

<table class="table table-light">
<h3> 2. Вывести авторов и количество написанных ими книг</h3>
    <thead>
        <tr>
            <th>Автор</th>
            <th>Количество</th>

        </tr>
    </thead>
    <tbody>
        <?php
        for($i=0; $i<sizeof($query); $i++){
            $last_name = $query[$i]['last_name'];
            $count=$query[$i]['count'];

            print ("<tr>
                <td>$last_name</td>
                <td>$count</td>

                </tr>);");
        
        }
        print("</table>");
        ?>
    </tbody>
</table>


<h3> 3. Найти книги, в названии которых содержится слово. Слово вводить в форму.</h3>

<form method="get" action="<?=Url::to(['/library/search'])?>">
    <input class="form-control" type="text" placeholder="Поиск ..." name="search">
</form>

