<?php

/**
 * Created by PhpStorm.
 * User: bw_dev
 * Date: 13.06.2018
 * Time: 9:46
 */

use yozh\base\components\db\Migration;
use yozh\base\components\db\Schema;
use yozh\base\components\utils\ArrayHelper;


class m000000_000001_template_table_dev extends Migration
{
	protected static $_table = 'template';
	
	public function safeUp( $params = [] )
	{
		
		parent::safeUp([
			'mode' => 1 ? self::ALTER_MODE_UPDATE : self::ALTER_MODE_IGNORE,
		]);
		
	}
	
	public function getColumns( $columns = [] )
	{
		return parent::getColumns( [
			'text' => $this->text()->notNull(),
		] );
	}
	
	public function getReferences( $references = [] )
	{
		return ArrayHelper::merge( [
			
			/*
			[
				'refTable'   => 'parent',
				'refColumns' => 'id',
				'columns'    => 'parent_id',
				//'onDelete'   => self::CONSTRAINTS_ACTION_RESTRICT,
			],
			*/
		], $references );
	}

}