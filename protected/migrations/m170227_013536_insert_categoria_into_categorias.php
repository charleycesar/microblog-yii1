<?php

class m170227_013536_insert_categoria_into_categorias extends CDbMigration
{
	public function up()
	{
		$this->insert('categorias',['nome'=>'Filme']);
		$this->insert('categorias',['nome'=>'Livros']);
		$this->insert('categorias',['nome'=>'Tutoriais']);
	}

	public function down()
	{
		$this->delete('categorias',['nome=:nome'],[':nome'=>'Filme']);
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
