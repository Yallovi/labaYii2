<?php
namespace app\models;
use yii\db\ActiveRecord;

class requests extends ActiveRecord
{ 
    public function getSearchResults($search){
        $searchResults = Books::find()->where(['like', 'name', $search])->asArray()->all();
        return $searchResults;
    }
}
