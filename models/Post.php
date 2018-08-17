<?php

namespace app\models;

use yii\db\ActiveRecord;
use yii\db\Expression;
use yii\web\UploadedFile;

/**
 * This is the model class for table "posts".
 *
 * @property int $id
 * @property string $title
 * @property string $content
 * @property string $thumbnail
 * @property string $description
 * @property string $keywords
 * @property int $pinned
 * @property int $slug
 * @property int $status
 * @property string $created_atФ
 * @property string $updated_at
 */
class Post extends \yii\db\ActiveRecord
{
    public $thumbnail_file;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'posts';
    }

    public function behaviors()
    {
        return [
            'slug' => [
                'class' => 'app\models\behaviors\Slug',
                'in_attribute' => 'title',
                'out_attribute' => 'slug',
                'translit' => true
            ],
            'timestamp' => [
                'class' => 'yii\behaviors\TimestampBehavior',
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['created_at', 'updated_at'],
                    ActiveRecord::EVENT_BEFORE_UPDATE => ['updated_at'],
                ],
                'value' => new Expression('NOW()'),
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['content', 'description', 'slug'], 'string'],
            [['pinned', 'status'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['title', 'thumbnail', 'keywords'], 'string', 'max' => 255],
            ['slug', 'unique', 'targetAttribute' => 'slug'],
            [['thumbnail_file'], 'file'],

        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'content' => 'Content',
            'thumbnail' => 'Thumbnail',
            'description' => 'Description',
            'keywords' => 'Keywords',
            'slug' => 'Slug',
            'pinned' => 'Pinned',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'thumbnail_file' => 'Thumbnail',
        ];
    }

    public function thumbnailUpload()
    {
        if ($this->thumbnail_file = UploadedFile::getInstance($this, 'thumbnail_file')) {

            if ($this->thumbnail != '' AND file_exists($this->thumbnail)) {
                unlink($this->thumbnail);
            }

            $this->thumbnail = 'uploads/posts/' . $this->id . '.' . time() . '.' . $this->thumbnail_file->extension;
            if ($this->thumbnail_file->saveAs('uploads/posts/' . $this->id . '.' . time() . '.' . $this->thumbnail_file->extension) AND
                $this->save()) {
                return true;
            } else {
                return false;
            }
        } else {
            return true;
        }
    }

    public function afterSave($insert, $changedAttributes)
    {
        parent::afterSave($insert, $changedAttributes);
        \Yii::$app->session->setFlash('success', 'The post is saved');

        if ($this->pinned == 1) {
            if (!$this->checkOtherPins($this->id)) {
                $this->pinned = 0;
                $this->save();
                \Yii::$app->session->setFlash('error', 'Was not able to pin the message');
            };
        }
    }


    /**
     * Unpins other pinned messages
     * returns true in success
     */

    public function checkOtherPins($id)
    {
        $posts = self::find()->where(['<>', 'id', $id])->all();

        foreach ($posts as $post) {
            if ($post->pinned == 1) {
                $post->pinned = 0;
                if (!$post->save()) return false;
            }
        }

        return true;
    }
}
