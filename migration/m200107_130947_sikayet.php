<?php

use yii\db\Migration;

/**
 * Class m200107_130947_sikayet
 */
class m200107_130947_sikayet extends Migration
{
 

    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%sikayet_tablosu}}', [
            'id' => $this->primaryKey(),
            'isim' => $this->string(80)->notNull(),
            'eposta' => $this->string(80)->notNull(),
            'sikayet' => <$this->text()->notNull(),
          
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{%sikayet_tablosu}}');
    }
    
}
