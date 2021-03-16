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

<h1>Genres</h1>

<table class="table table-light">
    <thead>
        <tr>
            <th>ID</th>
            <th>Название Жанра</th>
            <th>Описание Жанра</th>
            <th>Количество</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($genres as $genre): ?>
            <tr>
                <td><?= $genre->id_genre ?></td>
                <td><?= $genre->name_genre ?></td>
                <td><?= $genre->description_genre ?></td>
                <td><?= $genre->count ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

