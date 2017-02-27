<?php

class m170227_002845_create_posts_table extends CDbMigration
{
	public function up()
	{
		$this->createTable('posts', array(
		   'id' => 'pk',
		   'titulo' => 'string NOT NULL',
		   'conteudo' => 'text NOT NULL',
		   'administrador_id' => 'integer NOT NULL',
		   'categoria_id' => 'integer NOT NULL',
		   'created_time' => 'timestamp DEFAULT NOW()',
	    ));

		$this->addForeignKey('posts_has_administrador', 'posts', 'administrador_id', 'administrador','id','CASCADE','CASCADE');
		$this->addForeignKey('posts_has_categoria', 'posts', 'categoria_id', 'categorias','id','CASCADE','CASCADE');

	}

	public function down()
	{
		$this->dropTable('posts');
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
