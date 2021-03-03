<?php
namespace app\models;
use yii\db\ActiveRecord;

class Author extends ActiveRecord
{ 

    public function getBooks(){
        // Получаю автора книги
        return $this->hasMany(Books::className(), ['id_author ' => 'id_author ']);
    }
}
