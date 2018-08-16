<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "api_settings".
 *
 * @property int $id
 * @property string $instagram_access_token
 * @property string $youtube_client_id
 * @property string $youtube_channel
 * @property string $facebook_access_token
 * @property string $facebook_channel
 */
class ApiSettings extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'api_settings';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['instagram_access_token', 'youtube_api_key', 'youtube_channel', 'facebook_access_token', 'facebook_channel'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'instagram_access_token' => 'Instagram Access Token',
            'youtube_api_key' => 'Youtube Api Key',
            'youtube_channel' => 'Youtube Channel',
            'facebook_access_token' => 'Facebook Access Token',
            'facebook_channel' => 'Facebook Channel',
        ];
    }
}
