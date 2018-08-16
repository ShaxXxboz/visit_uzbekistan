<?php

use yii\db\Migration;

/**
 * Handles the creation of table `api_settings`.
 */
class m180816_064110_create_api_settings_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('api_settings', [
            'id' => $this->primaryKey(),
            'instagram_access_token' => $this->string(),
            'youtube_client_id' => $this->string(),
            'youtube_channel' => $this->string(),
            'facebook_access_token' => $this->string(),
            'facebook_channel' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('api_settings');
    }
}
