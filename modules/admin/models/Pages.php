<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "pages".
 *
 * @property int $id
 * @property string $created_at
 * @property string $updated_at
 * @property string $title
 * @property string $text
 * @property string $keywords
 * @property string $description
 */
class Pages extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pages';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['created_at', 'updated_at', 'title', 'text'], 'required'],
            [['created_at', 'updated_at'], 'safe'],
            [['text'], 'string'],
            [['title'], 'string', 'max' => 50],
            [['keywords', 'description'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'title' => 'Title',
            'text' => 'Text',
            'keywords' => 'Keywords',
            'description' => 'Description',
        ];
    }
}
