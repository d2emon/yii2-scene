<?php

use yii\db\Migration;

class m160421_072540_add_spectacles extends Migration
{
    public function safeUp()
    {
	$this->createTable('spectacle', [
	    'id'          => $this->primaryKey(),
	    'title'       => $this->string(),
	    'description' => $this->text(),
	    'premiere'    => $this->date(),
	    'poster'  	  => $this->string(6),
	]);

    }

    public function safeDown()
    {
	$this->dropTable('spectacle');
        return true;
    }
}
