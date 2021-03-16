<?php

namespace app\controllers;

use yii\filters\AccessControl;
use yii\web\Controller;
use yii\data\Pagination;
use app\models\Author;
use app\models\Books;
use app\models\Genre;
use app\models\Request;
use app\models\Delete;
use yii;

class LibraryController extends Controller
{
    
    public function actionAuthor()
    {   

        $authors = Author::find()->all();     
        return $this->render('author', [
            'authors' => $authors,
            
        ]);

    
    }
    public function actionBooks()
    {
        $query = Books::find()->joinWith('genre')->joinWith('author')->all();

        // $pagination = new Pagination([
        //     'defaultPageSize' => 5,
        //     // 'totalCount' => $query->count(),
        // ]);

        $book = $query;

        return $this->render('books', [
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
    public function actionGenre()
    {
        $query = Genre::find();

        $pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $query->count(),
        ]);

        $genres = $query->orderBy('name_genre')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->render('Genre', [
            'genres' => $genres,
            'pagination' => $pagination,
        ]);
    }
    public function actionRequests()
    {
        $model = Books::find()->where(['like', 'release_date', '19'])->orderBy(['release_date' => SORT_ASC])->all();
        // $authorsCount=Author::find()->select(['last_name', 'COUNT(*) AS kol'])->joinWith('books')->groupBy(['last_name'])->all();
        $query=books::find()
        ->select(['author.last_name', 'COUNT(books.name) AS count'])->from('books')->joinWith('author')
        ->groupBy('author.last_name')
        ->asArray()
        ->all();
        return $this->render('requests', [
            'model' => $model,
            'query' => $query,
            // 'authorsCount' => $authorsCount,
        ]);
   
    }
    public function actionSearch()
    {
        $search =Yii::$app->request->get('search');
        $books = new Books();
        $books = $books->getSearchResults($search);
        return $this->render('search', compact('books', 'search'));
    }
    public function actionCreate()
    {   
        $model = new Author();
        if($model->load(Yii::$app->request->post()) && $model->save()) {
            Yii::$app->session->setFlash('success', 'Author addesd');
            return $this->redirect(['library/author']);
            }

        return $this->render('create', [
            'model' => $model,
            
        ]);
        
    }
    public function actionDelete()
    { 
        $model= new Delete();
        if($model->load(Yii::$app->request->post()) && $model->validate()) 
        {
        $author =Author::findOne(['id_author'=>$model->id_author]);
        if($author)
        {
        $author->delete();
        return $this->refresh();
        }
        else $message='error';
    }
        $data=Author::find()->all();
        return $this->render('delete', [
            'data' => $data, 
            'model' => $model,
            'message'=> $message,
        ]);
    }
}