<?php

namespace app\models;

use Yii;
use yii\base\model;
use yii\web\UploadedFile;

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
     * @var UploadedFile
     */
	 
	public $imageFile;
	
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
			[['imageFile'], 'file','skipOnEmpty' => false, 'extensions' => 'png, jpg'],
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
	
	public function getImageurl()
		{
			//return \Yii::$app->request->BaseUrl.'/<path to image>/'.$this->logo;
			return '@web/'.$this->image;
		}
}
