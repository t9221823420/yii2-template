<?php

namespace yozh\template;

use yii\base\Module as BaseModule;

class Module extends BaseModule
{

	const MODULE_ID = 'template';
	
	public $controllerNamespace = 'yozh\\' . self::MODULE_ID . '\controllers';
	
}
