<?php
/**
 * Created by PhpStorm.
 * User: bw_dev
 * Date: 13.06.2018
 * Time: 9:49
 */

namespace yozh\template\models;

use Yii;
use yozh\base\models\BaseActiveRecord as ActiveRecord;

class Template extends ActiveRecord
{
	public static function tableName()
	{
		return '{{%template}}';
	}
	
	public function rules( $rules = [], $update = false )
	{
		static $_rules;
		
		if( !$_rules || $update ) {
			
			$_rules = parent::rules( \yozh\base\components\validators\Validator::merge( [
				
				[ [ 'text', ], 'required' ],
				[ [ 'text', ], 'string' ],
				[ [ 'text', ], 'filter', 'filter' => 'trim' ],
				[ [ 'text', ], 'filter', 'filter' => '\yii\helpers\HtmlPurifier::process' ],
			
			], $rules ) );
			
		}
		
		return $_rules;
		
	}
	
}