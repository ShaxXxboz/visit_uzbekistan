<?php

use yii\db\Migration;

/**
 * Class m180815_182754_create_user
 */
class m180815_182754_create_user extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->insert('users', [
            'login' =>'admin',
            'password' => Yii::$app->security->generatePasswordHash('admin'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m180815_182754_create_user cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180815_182754_create_user cannot be reverted.\n";

        return false;
    }
    */
}
