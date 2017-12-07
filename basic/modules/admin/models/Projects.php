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
 * @property string $youtube
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
            [['id', 'title'], 'required'],
            [['id'], 'integer'],
            [['description'], 'string'],
            [['title', 'demensions', 'paramtitle1', 'paramvalue1', 'paramtitle2', 'paramvalue2', 'list1', 'list2', 'list3', 'photo1', 'photo2', 'photo3', 'photo4', 'photo5', 'youtube'], 'string', 'max' => 250],
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
            'paramvalue1' => 'Характеристика',
            'paramtitle2' => 'Paramtitle2',
            'paramvalue2' => 'Paramvalue2',
            'list1' => 'List1',
            'list2' => 'List2',
            'list3' => 'List3',
            'photo1' => 'Photo1',
            'photo2' => 'Photo2',
            'photo3' => 'Photo3',
            'photo4' => 'Photo4',
            'photo5' => 'Photo5',
            'youtube' => 'Youtube',
        ];
    }
}
