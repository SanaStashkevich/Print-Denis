<?php

use yii\db\Migration;

/**
 * Handles the creation of table `callbacks`.
 */
class m180114_120205_create_callbacks_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('callbacks', [
            'id' => $this->primaryKey(),
            'name' => $this->string(160)->notNull(),
            'phone' => $this->string(32)->notNull(),
            'status' => $this->smallInteger(1)->check('status in (1,2)')->notNull(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('callbacks');
    }
}
