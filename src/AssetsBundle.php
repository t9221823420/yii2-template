<?php

namespace yozh\template;

class AssetsBundle extends \yozh\base\AssetBundle
{

    public $sourcePath = __DIR__ .'/../assets/';

    public $css = [
        //'css/yozh-template.css',
	    //['css/yozh-template.print.css', 'media' => 'print'],
    ];
	
    public $js = [
        //'js/yozh-template.js'
    ];
	
	public $publishOptions = [
		//'forceCopy'       => true,
	];
	
}