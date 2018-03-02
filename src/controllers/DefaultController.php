<?php

namespace yozh\template\controllers;

use yozh\crud\traits\CRUDTrait;
use yozh\template\models\BaseModel;
use yozh\template\AssetsBundle;
use yozh\base\controllers\DefaultController as Controller;


class DefaultController extends Controller
{
	use CRUDTrait {
		actionIndex as protected traitActionIndex;
	}
	
	protected static function primaryModel()
	{
		return BaseModel::className();
	}
	
	public function actionIndex()
	{
		//AssetsBundle::register( $this->view );
		return $this->traitActionIndex();
	}
	
}
