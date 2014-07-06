<?php
namespace raoul2000\widget\guiders;

use yii\web\AssetBundle;

/**
 * @author Raoul <raoul.boulard@gmail.com>
 */
class GuidersAsset extends AssetBundle
{
	public $js = [
		'guiders.js'
	];
	public $css = [
		'guiders.css'
	];
	public $depends = [
		'yii\web\JqueryAsset',
	];
	public function init() {
		$this->sourcePath = __DIR__.'/assets';
		return parent::init();
	}
}
