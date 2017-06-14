<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "item".
 *
 * @property integer $item_id
 * @property integer $user_id
 * @property string $item_title
 * @property string $item_description
 * @property integer $item_price
 * @property string $item_tags
 * @property string $item_image
 */
class Item extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'item';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'item_title', 'item_description', 'item_price', 'item_tags', 'item_image'], 'required'],
            [['user_id', 'item_price'], 'integer'],
            [['item_description', 'item_image'], 'string'],
            [['item_title'], 'string', 'max' => 100],
            [['item_tags'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'item_id' => 'Item ID',
            'user_id' => 'User ID',
            'item_title' => 'Item Title',
            'item_description' => 'Item Description',
            'item_price' => 'Item Price',
            'item_tags' => 'Item Tags',
            'item_image' => 'Item Image',
        ];
    }
}
