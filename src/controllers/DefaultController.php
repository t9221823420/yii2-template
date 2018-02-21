<?php

namespace yozh\template\controllers;

use yozh\crud\traits\CRUDTrait;
use yozh\template\models\DefaultModel;
use yozh\template\AssetsBundle;

use yii\filters\AccessControl;
use yii\web\Controller;

class DefaultController extends Controller
{
	use CRUDTrait {
		actionIndex as protected traitActionIndex;
	}
	
	
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
						'roles' => [ '@' ],
					],
				],
			],
		];
	}
	
	public function actionIndex()
	{
		//AssetsBundle::register( $this->view );
		return $this->traitActionIndex();
	}
	
}
