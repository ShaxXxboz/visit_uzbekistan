<?php

use yii\db\Migration;

/**
 * Class m180815_134148_add_slug_column_to_posts
 */
class m180815_134148_add_slug_column_to_posts extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('posts', 'slug', $this->string()->after('keywords'));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m180815_134148_add_slug_column_to_posts cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180815_134148_add_slug_column_to_posts cannot be reverted.\n";

        return false;
    }
    */
}
