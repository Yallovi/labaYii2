<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "author".
 *
 * @property int $id_author
 * @property string $last_name
 * @property string $first_name
 * @property string $patronymic
 * @property string|null $date_of_birth
 * @property string|null $date_of_death
 * @property string $language_of_works
 * @property int|null $count
 *
 * @property Books[] $books
 */
class Author extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'author';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['date_of_birth', 'date_of_death'], 'safe'],
            [['count'], 'integer'],
            [['last_name', 'first_name', 'patronymic', 'language_of_works'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_author' => 'Id Author',
            'last_name' => 'Last Name',
            'first_name' => 'First Name',
            'patronymic' => 'Patronymic',
            'date_of_birth' => 'Date Of Birth',
            'date_of_death' => 'Date Of Death',
            'language_of_works' => 'Language Of Works',
            'count' => 'Count',
        ];
    }

    /**
     * Gets query for [[Books]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBooks()
    {
        return $this->hasMany(Books::className(), ['id_author' => 'id_author']);
    }
}
