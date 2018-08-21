<?php

namespace yozh\template\controllers;

use yozh\template\models\Template;
use yozh\crud\controllers\DefaultController as Controller;

/**
 * Default controller for the `template` module
 */
class DefaultController extends Controller
{
	
	public static function defaultModelClass()
	{
		return Template::class;
	}
	
}
