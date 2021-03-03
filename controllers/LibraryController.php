<?php

namespace app\controllers;

use yii\web\Controller;
use yii\data\Pagination;
use app\models\Author;
use app\models\Books;

class LibraryController extends Controller
{
    public function actionAuthor()
    {
        $query = Author::find();

        $pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $query->count(),
        ]);

        $authors = $query->orderBy('last_name')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->render('author', [
            'authors' => $authors,
            'pagination' => $pagination,
        ]);
    }
    
}