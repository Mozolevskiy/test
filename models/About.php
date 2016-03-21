<?php

namespace app\models;

use Yii;
use yii\web\UploadedFile;
use app\models;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "about".
 *
 * @property integer $id
 * @property string $img
 * @property string $caption
 */
class About extends \yii\db\ActiveRecord
{
   // public $imageFile;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'about';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['caption', 'title'], 'string', 'max' => 255],
           // [['imageFile'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'imageFile' => 'ImageFile',
           'caption' => 'Caption',
            'title'=>'Title'
        ];
    }
  /*  public function upload()
    {
        if ($this->validate()) {
            $this->imageFile->saveAs('uploads/about/' . $this->imageFile->baseName . '.' . $this->imageFile->extension);
            return true;
        } else {
            return false;
        }
    }*/

}
