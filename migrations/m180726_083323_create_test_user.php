<?php

use yii\db\Migration;

/**
 * Class m180726_083323_create_test_user
 */
class m180726_083323_create_test_user extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->insert('user', [
            'full_name' => 'admin',
            'login' =>'admin',
            'password' => Yii::$app->security->generatePasswordHash('admin'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m180726_083323_create_test_user cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180726_083323_create_test_user cannot be reverted.\n";

        return false;
    }
    */
}
