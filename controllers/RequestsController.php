<?php

namespace app\controllers;

use yii\web\Controller;
use yii\data\Pagination;
use app\models\Books;
use app\models\Requests;
use yii;

class RequestsController extends Controller
{
    public function actionIndex()
    {
        $model = Books::find()->where(['like', 'release_date', '19'])->orderBy(['release_date' => SORT_ASC])->all();
        return $this->render('index', [
            'model' => $model,
        ]);
   
    }
    public function actionSearch()
    {
        $search =Yii::$app->request->get('search');
        $books = new Books();
        $books = $books->getSearchResults($search);
        return $this->render('search', compact('books', 'search'));
    }
}