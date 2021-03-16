<?php
namespace app\models;
use yii\db\ActiveRecord;

class Author extends ActiveRecord
{ 
    public function getBooks(){
        // Получаю автора книги
        return $this->hasMany(Books::className(), ['id_author ' => 'id_author ']);
    }

    public function rules()
    {
        
        return [
            [['last_name', 'first_name', 'patronymic', 'date_of_birth', 'date_of_death', 'language_of_works'], 'required', 'message' => 'Поле обязательно'],
            [['date_of_birth'], 'date', 'format'=> 'php:Y-m-d'],
            [['count'], 'integer'],
            
            
        ];
    }
}
