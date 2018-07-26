<?php

use yii\db\Migration;

/**
 * Handles the creation of table `project`.
 */
class m180726_072722_create_project_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('project', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer(11)->notNull(),
            'title' => $this->string()->notNull(),
            'price' => $this->integer()->notNull(),
            'start_date' => $this->dateTime()->notNull(),
            'end_date' => $this->dateTime()->notNull(),
        ]);

        $this->createIndex(
            'idx-project-user_id',
            'project',
            'user_id'
        );

        $this->addForeignKey(
            'fk-project-user_id',
            'project',
            'user_id',
            'user',
            'id',
            'CASCADE'
        );
    }



    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {

        $this->dropForeignKey(
            'fk-project-user_id',
            'project'
        );

        $this->dropIndex(
            'idx-project-user_id',
            'project'
        );

        $this->dropTable('project');

    }
}
