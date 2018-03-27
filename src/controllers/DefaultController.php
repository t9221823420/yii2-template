<?php

namespace yozh\template\controllers;

use yozh\crud\traits\CRUDTrait;
use yozh\template\models\BaseModel;
use yozh\template\AssetBundle;
use yozh\base\controllers\DefaultController as Controller;


class DefaultController extends Controller
{
	use CRUDTrait {
		actionIndex as protected traitActionIndex;
	}
	
	protected static function defaultModel()
	{
		return BaseModel::className();
	}
	
	public function actionIndex()
	{
		//AssetBundle::register( $this->view );
		return $this->traitActionIndex();
	}
	
}
