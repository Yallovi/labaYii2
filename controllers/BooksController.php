<?php

namespace app\controllers;

use yii\web\Controller;
use yii\data\Pagination;
use app\models\Books;

class BooksController extends Controller
{
    public function actionIndex()
    {
        $query = Books::find()->joinWith('genre')->joinWith('author')->all();

        $pagination = new Pagination([
            'defaultPageSize' => 5,
            // 'totalCount' => $query->count(),
        ]);

        $book = $query;

        return $this->render('index', [
            'book' => $book,
            // 'pagination' => $pagination,
        ]);

        // $books=Books::find()->joinWith('genre')->joinWith('author')->all();
        // return $this->render('index', [
        //     'book' => $books
        // ]);

        // $data = Content::find()->getAuthor()->with('author')->all();
        // return $this->render('index', ['data' => $data]);
    }
}