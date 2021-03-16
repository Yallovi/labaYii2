<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\widgets\ActiveForm;
use yii\helpers\Url;


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
    <li class="nav-item">
        <a class="nav-link disabled" href="requests" tabindex="-1" aria-disabled="true">Запросы</a>
    </li>
</nav>


<h1>Authors</h1>

<button type='submit'>
<a href="<?php echo Url::to(['library/create']);?>">Create a new Author</a> 
</button>
<button>
<a href="<?php echo Url::to(['library/delete']);?>"> Delete Author</a>
</button>
<br> <br>
<table>
    <tr>
        <th>ID</th>
        <th>Last_name</th>
        <th>First_name</th>
        <th>Patronymic</th>
        <th>Date_of_birth</th>
        <th>Date_of_death</th>
        <th>language_of_works</th>
        <th>Count</th>
    </tr>
<?php foreach ($authors as $author): ?>
            <tr>
                <td><?= Html::encode("{$author->id_author} ") ?></td>
                <td><?= $author->last_name?></td>
                <td><?= $author->first_name?></td>
                <td><?= $author->patronymic ?></td>
                <td><?= $author->date_of_birth ?></td>
                <td><?= $author->date_of_death ?></td>
                <td><?= $author->language_of_works ?></td>
                <td><?= $author->count ?></td>
            </tr>
        
<?php endforeach; ?>
</table>
<br><br>




