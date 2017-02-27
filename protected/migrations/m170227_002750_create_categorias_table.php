<?php

class m170227_002750_create_categorias_table extends CDbMigration
{
	public function up()
	{
		$this->createTable('categorias', array(
		   'id' => 'pk',
		   'nome' => 'string NOT NULL',
		   'create_time' => 'timestamp DEFAULT NOW()',
	    ));
	}

	public function down()
	{
		$this->dropTable('categorias');
	}

	/*
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
	}

	public function safeDown()
	{
	}
	*/
}
