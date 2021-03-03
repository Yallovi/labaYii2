<?php
namespace app\models;
use yii\db\ActiveRecord;

class Books extends ActiveRecord
{

    public function getAuthor(){
        // Получаю автора книги
        return $this->hasOne(Author::className(), ['id_author' => 'id_author']);
    }

    public function getGenre(){
        // Получаю автора книги
        return $this->hasOne(Genre::className(), ['id_genre' => 'id_genre']);
    }

    public function getSearchResults($search){
        $searchResults = Books::find()->where(['like', 'name', $search])->all();
        return $searchResults;
    }
}
