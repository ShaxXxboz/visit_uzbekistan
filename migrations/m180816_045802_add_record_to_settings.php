<?php

use yii\db\Migration;

/**
 * Class m180816_045802_add_record_to_settings
 */
class m180816_045802_add_record_to_settings extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->insert('settings', [
            'site_title' =>'Visit Uzbekistan',
            'site_keywords' => '',
            'site_description' => '',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m180816_045802_add_record_to_settings cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180816_045802_add_record_to_settings cannot be reverted.\n";

        return false;
    }
    */
}
