<?php

namespace yozh\template;

use Yii;
use yii\base\BootstrapInterface;

class Bootstrap implements BootstrapInterface{

    public function bootstrap($app)
    {

        $app->getUrlManager()->addRules([
            'template' => 'template/default/index',
        ], false);

         $app->setModule('template', 'yozh\template\Module');

    }
}