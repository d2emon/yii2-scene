<?php

use yii\db\Migration;

class m160421_075054_add_genres extends Migration
{
    public function safeUp()
    {
	$this->createTable('genre', [
	    'id'          => $this->primaryKey(),
	    'title'       => $this->string(),
	    'description' => $this->text(),
	]);

	$this->addColumn('spectacle', 'genre_id', $this->integer());

	$this->createIndex(
	    'idx-spectacle-genre_id',
	    'spectacle',
	    'genre_id'
	);

	$this->addForeignKey(
	    'fk-spectacle-genre_id',
	    'spectacle',
	    'genre_id',
	    'genre',
	    'id',
	    'CASCADE'
	);
    }

    public function safeDown()
    {
	$this->dropForeignKey(
	    'fk-spectacle-genre_id',
	    'spectacle'
	);    

	$this->dropIndex(
	    'idx-spectacle-genre_id',
	    'spectacle'
	);

	$this->dropTable('genre');
        return true;
    }
}
