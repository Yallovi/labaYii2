<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>

<nav class="nav ">
    <li class="nav-item ">
        <a class="nav-link active" href="author">Авторы</a>
    </li>
    <li class="nav-item">
        <a class="nav-link disabled" href="books" tabindex="-1" aria-disabled="true">Книги</a>
    </li>
    <li class="nav-item">
        <a class="nav-link disabled" href="genre" tabindex="-1" aria-disabled="true">Жанры</a>
    </li>
</nav>

<h1>Books</h1>

<table class="table table-light">
    <thead>
        <tr>
            <th>ID</th>
            <th>Название книги</th>
            <th>Дата Выпуска</th>
            <th>Описание</th>
            <th>Автор</th>
            <th>Жанры</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($book as $books): ?>
            <tr>
                <td><?= $books->id_book ?></td>
                <td><?= $books->name ?></td>
                <td><?= $books->release_date ?></td>
                <td><?= $books->description ?></td>
                <td><?= $books->author->last_name?></td>
                <td><?= $books->genre->name_genre ?></td>
            </tr>
         <?php endforeach; ?>
    </tbody>
</table>



