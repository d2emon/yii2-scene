<?php

use yii\db\Migration;

class m160526_053826_spectacle2date extends Migration
{
    public function safeUp()
    {
	$this->createTable('spectacle_date', [
	    'spectacle_id' => $this->integer(),
	    'play_time'    => $this->datetime(),
	]);
	$this->addForeignKey('spectacle_date_spectacle', 'spectacle_date', 'spectacle_id', 'spectacle', 'id');
	$this->addPrimaryKey('spectacle_play_time',      'spectacle_date', ['spectacle_id', 'play_time']);

    }

    public function safeDown()
    {
	$this->dropForeignKey('spectacle_date_spectacle', 'spectacle_date');
	$this->dropTable('spectacle_date');
        return true;
    }
}
