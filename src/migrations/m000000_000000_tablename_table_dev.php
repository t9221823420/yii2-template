<?php

use yozh\base\components\db\Migration;
use yozh\base\components\db\Schema;
use yozh\base\components\utils\ArrayHelper;

/**
 * Class m180305_040759_tablename_table_dev
 */
class m000000_000000_tablename_table_dev extends Migration
{
	protected static $_table = 'tablename';
	
	public function safeUp( $params = [] )
	{
		parent::safeUp( [
			'mode' => 0 ? self::ALTER_MODE_UPDATE : self::ALTER_MODE_IGNORE,
		] );
		
	}
	
	public function getColumns( $columns = [] )
	{
		return ArrayHelper::merge( [
			
			'id' => $this->primaryKey(),
		
		], parent::getColumns( $columns ) );
		
	}
	
	public function getReferences( $references = [] )
	{
		return ArrayHelper::merge( [
			
			/*
			[
				'refTable'   => 'user',
				'refColumns' => 'id',
				'columns'    => 'user_id',
			],
			*/
		
		], parent::getReferences( $references ) );
	}
	
	public function getIndices( $indices = [] )
	{
		return ArrayHelper::merge( [
			
			/*
			[
				'column' => 'tree_id',
			],
			*/
		
		], parent::getIndices( $indices ) );
		
	}
	
}
