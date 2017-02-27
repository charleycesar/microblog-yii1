<?php

class m170227_011610_insert_administrador_into_administrador extends CDbMigration
{
	public function up()
	{
		$this->insert('administrador',[
			'nivel'=>1,
			'nome'=>'Charley',
			'email'=>'charleycesar@gmail.com',
			'usuario'=>'admin',
			'senha'=>'admin'
		]);
	}

	public function down()
	{
		$this->delete('administrador',['admin']);
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
