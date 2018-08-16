<?php

namespace app\models;

use Yii;
use yii\web\UploadedFile;

/**
 * This is the model class for table "settings".
 *
 * @property int $id
 * @property string $site_title
 * @property string $site_description
 * @property string $site_keywords
 * @property string $favicon
 */
class Settings extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'settings';
    }

    public $favicon_file;

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['site_title'], 'required'],
            [['site_description'], 'string'],
            [['site_title', 'site_keywords', 'favicon'], 'string', 'max' => 255],
            [['favicon_file'], 'file'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'site_title' => 'Site Title',
            'site_description' => 'Site Description',
            'site_keywords' => 'Keywords',
            'favicon' => 'Favicon',
            'favicon_file' => 'Favicon',
        ];
    }


    public function faviconUpload()
    {
        if ($this->favicon_file = UploadedFile::getInstance($this, 'favicon_file')) {
            $this->favicon = 'uploads/settings/favicon.' . $this->favicon_file->extension;
            if ($this->favicon_file->saveAs('uploads/settings/favicon.' . $this->favicon_file->extension) AND
                $this->save()) {
                return true;
            } else {
                return false;
            }
        } else {
            return true;
        }
    }
}
