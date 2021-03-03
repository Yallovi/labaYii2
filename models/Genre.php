<?php
namespace app\models;
use yii\db\ActiveRecord;

class Genre extends ActiveRecord
{ 
    public function getBooks(){
        // Получаю автора книги
        return $this->hasMany(Books::className(), ['id_genre' => 'id_genre']);
    }
}
