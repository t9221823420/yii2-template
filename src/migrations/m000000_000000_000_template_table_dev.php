<?php

/**
 * Created by PhpStorm.
 * User: bw_dev
 * Date: 13.06.2018
 * Time: 9:46
 */

use yozh\base\components\db\Migration;
use yozh\base\components\db\Schema;
use yozh\base\components\helpers\ArrayHelper;
use yozh\template\models\Template;


class m000000_000000_000_template_table_dev extends Migration
{
	protected static $_table;
	
	public function __construct( array $config = [] ) {
		
		static::$_table = static::$_table ?? Template::getRawTableName();
		
		parent::__construct( $config );
		
	}
	
	public function getColumns( $columns = [] )
	{
		return parent::getColumns( [
			'text' => $this->text()->notNull(),
		] );
	}
	
	public function getReferences( $references = [] )
	{
		return parent::getReferences( array_merge( [
			
			/*
			[
				'refTable'   => 'parent',
				'refColumns' => 'id',
				'columns'    => 'parent_id',
				//'onDelete'   => self::CONSTRAINTS_ACTION_RESTRICT,
			],
			*/
		], $references ) );
	}

}