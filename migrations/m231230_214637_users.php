<?php

use yii\db\Migration;

/**
 * Class m231230_214637_users
 */
class m231230_214637_users extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%users}}', [
            'id' => $this->primaryKey()->unsigned(),
            'name' => $this->char(20)->notNull()->unsigned(),
            'email' => $this->char(40)->notNull()->unique()->unsigned(),
            'password' => $this->text()->notNull()->unsigned(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%users}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m231230_214637_users cannot be reverted.\n";

        return false;
    }
    */
}
