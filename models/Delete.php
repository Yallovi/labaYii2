<?php
namespace app\models;
use yii\db\ActiveRecord;

class Delete extends ActiveRecord
{ 
    public $id_author;
    public function rules()
    {
        
        return [
            [['id_author'], 'required']
            
            
        ];
    }
}