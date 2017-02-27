<?php

class m170227_001039_create_administrador_table extends CDbMigration
{
	public function up()
	{
		$this->createTable('administrador', array(
		   'id' => 'pk',
		   'nivel' => 'integer NOT NULL',
		   'nome' => 'string NOT NULL',
		   'email' => 'string NOT NULL',
		   'usuario' => 'string NOT NULL',
		   'senha' => 'string NOT NULL',
	   ));
	}

	public function down()
	{
		$this->dropTable('administrador');
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
