<?php

use yii\db\Migration;

/**
 * Handles the creation of table `subscribers`.
 */
class m180114_120147_create_subscribers_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('subscribers', [
            'id' => $this->primaryKey(),
            'email' => $this->string(160)->notNull()->unique(),
            'status' => $this->smallInteger(1)->check('status in (1,2)')->notNull(),
            'hash'  => $this->string(250)->notNull()->unique(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('subscribers');
    }
}
