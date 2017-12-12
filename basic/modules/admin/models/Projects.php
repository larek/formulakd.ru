<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "projects".
 *
 * @property integer $id
 * @property string $title
 * @property string $description
 * @property string $demensions
 * @property string $paramtitle1
 * @property string $paramvalue1
 * @property string $paramtitle2
 * @property string $paramvalue2
 * @property string $list1
 * @property string $list2
 * @property string $list3
 * @property string $photo1
 * @property string $photo2
 * @property string $photo3
 * @property string $photo4
 * @property string $photo5
 * @property string $photo6
 * @property string $youtube
 * @property integer $big
 */
class Projects extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pro';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['id','big'], 'integer'],
            [['description'], 'string'],
            [['title', 'demensions', 'paramtitle1', 'paramvalue1', 'paramtitle2', 'paramvalue2', 'list1', 'list2', 'list3', 'photo1', 'photo2', 'photo3', 'photo4', 'photo5', 'photo6', 'youtube'], 'string', 'max' => 250],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Название',
            'description' => 'Описание',
            'demensions' => 'Габариты',
            'paramtitle1' => 'Характеристика заголовок 1',
            'paramvalue1' => 'Характеристика значение 1',
            'paramtitle2' => 'Характеристика заголовок 2',
            'paramvalue2' => 'Характеристика значение 2',
            'list1' => 'Список 1',
            'list2' => 'Список 2',
            'list3' => 'Список 3',
            'photo1' => 'Фотография главная',
            'photo2' => 'Фотография обложки большая (730x292px)',
            'photo3' => 'Фотография обложки маленькая (350x292px)',
            'photo4' => 'Фото товара 1',
            'photo5' => 'Фото товара 2',
            'photo6' => 'Фото youtube',
            'youtube' => 'Youtube',
            'big' => 'Длинная обложка'
        ];
    }
}
