<?php

namespace yozh\template\controllers;

use yozh\base\traits\CRUDTrait;
use yozh\template\models\DefaultModel;
use yii\filters\AccessControl;
use yii\web\Controller;

class DefaultController extends Controller
{
	use CRUDTrait;
	
	protected static function primaryModel()
	{
		return DefaultModel::className();
	}
	
	public function behaviors()
	{
		return [
			'access' => [
				'class' => AccessControl::className(),
				'rules' => [
					[
						'allow' => true,
						'roles' => ['@'],
					],
				],
			],
		];
	}
	
	
}
