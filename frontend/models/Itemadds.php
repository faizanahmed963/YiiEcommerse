<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "itemadds".
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $title
 * @property string $description
 * @property integer $price
 * @property string $tag
 * @property string $image
 */
class Itemadds extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'itemadds';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'title', 'description', 'price', 'tag', 'image'], 'required'],
            [['user_id', 'price'], 'integer'],
            [['description', 'image'], 'string'],
            [['title'], 'string', 'max' => 100],
            [['tag'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'title' => 'Title',
            'description' => 'Description',
            'price' => 'Price',
            'tag' => 'Tag',
            'image' => 'Image',
        ];
    }
}
