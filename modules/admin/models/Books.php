<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "books".
 *
 * @property int $id_book
 * @property string|null $name
 * @property string|null $release_date
 * @property string|null $description
 * @property int|null $id_author
 * @property int|null $id_genre
 *
 * @property Author $author
 * @property Genre $genre
 * @property Comments[] $comments
 */
class Books extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'books';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['release_date'], 'safe'],
            [['id_author', 'id_genre'], 'integer'],
            [['name'], 'string', 'max' => 50],
            [['description'], 'string', 'max' => 500],
            [['id_author'], 'exist', 'skipOnError' => true, 'targetClass' => Author::className(), 'targetAttribute' => ['id_author' => 'id_author']],
            [['id_genre'], 'exist', 'skipOnError' => true, 'targetClass' => Genre::className(), 'targetAttribute' => ['id_genre' => 'id_genre']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_book' => 'Id Book',
            'name' => 'Name',
            'release_date' => 'Release Date',
            'description' => 'Description',
            'id_author' => 'Id Author',
            'id_genre' => 'Id Genre',
        ];
    }

    /**
     * Gets query for [[Author]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAuthor()
    {
        return $this->hasOne(Author::className(), ['id_author' => 'id_author']);
    }

    /**
     * Gets query for [[Genre]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getGenre()
    {
        return $this->hasOne(Genre::className(), ['id_genre' => 'id_genre']);
    }

    /**
     * Gets query for [[Comments]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getComments()
    {
        return $this->hasMany(Comments::className(), ['book' => 'id_book']);
    }
}
